import Image from "next/image";
import Link from "next/link";
import clsx from "clsx";
import { Suspense } from "react";
import Newsletter from "@/components/Newsletter";
import { Card } from "@/components/Card";
import { Container } from "@/components/Container";
import {
  GitHubIcon,
  InstagramIcon,
  LinkedInIcon,
} from "@/components/SocialIcons";
import logoUAH from "@/images/logos/logo-uah.svg";
import logoMTM from "@/images/logos/logo-mtm.webp";
import image2 from "@/images/photos/image-2.webp";
import image4 from "@/images/photos/image-4.webp";
import image5 from "@/images/photos/image-5.webp";
import { getAllArticles } from "@/lib/articles";
import Pricing from "@/components/Pricing";

function BriefcaseIcon(props) {
  return (
    <svg
      viewBox="0 0 24 24"
      fill="none"
      strokeWidth="1.5"
      strokeLinecap="round"
      strokeLinejoin="round"
      aria-hidden="true"
      {...props}
    >
      <path
        d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
        className="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"
      />
      <path
        d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5"
        className="stroke-zinc-400 dark:stroke-zinc-500"
      />
    </svg>
  );
}

function Article({ article }) {
  return (
    <Card as="article">
      <Card.Title href={`/articles/${article.slug}`}>
        {article.title}
      </Card.Title>
      <Card.Eyebrow as="time" dateTime={article.date} decorate>
        {new Date(article.date).toLocaleDateString("es-ES", {
          year: "numeric",
          month: "long",
          day: "numeric",
        })}
      </Card.Eyebrow>
      <Card.Description>{article.description}</Card.Description>
      <Card.Cta>Leer artículo</Card.Cta>
    </Card>
  );
}

function SocialLink({ icon: Icon, ...props }) {
  return (
    <Link
      className="p-1 -m-1 group"
      {...props}
      target="_blank"
      referrerPolicy="strict-origin-when-cross-origin"
    >
      <Icon className="w-10 h-10 transition fill-zinc-500 group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300" />
    </Link>
  );
}

function Role({ role }) {
  let startLabel =
    typeof role.start === "string" ? role.start : role.start.label;
  let startDate =
    typeof role.start === "string" ? role.start : role.start.dateTime;

  let endLabel = typeof role.end === "string" ? role.end : role.end.label;
  let endDate = typeof role.end === "string" ? role.end : role.end.dateTime;

  return (
    <li className="flex gap-4">
      <div className="relative flex items-center justify-center flex-none w-10 h-10 mt-1 rounded-full shadow-md ring-1 shadow-zinc-800/5 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
        <Image
          src={role.logo}
          alt="logos usados"
          className="w-10 h-10 bg-white rounded-full"
          width={40}
          height={40}
          loading="lazy"
          quality={100}
        />
      </div>
      <dl className="flex flex-wrap flex-auto gap-x-2">
        <dt className="sr-only">Compañía</dt>
        <dd className="flex-none w-full text-sm font-medium text-zinc-900 dark:text-zinc-100">
          {role.company}
        </dd>
        <dt className="sr-only">Rol</dt>
        <dd className="text-xs text-zinc-500 dark:text-zinc-400">
          {role.title}
        </dd>
        <dt className="sr-only">Fecha</dt>
        <dd
          className="ml-auto text-xs text-zinc-400 dark:text-zinc-500"
          aria-label={`${startLabel} until ${endLabel}`}
        >
          <time dateTime={startDate}>{startLabel}</time>{" "}
          <span aria-hidden="true">—</span>{" "}
          <time dateTime={endDate}>{endLabel}</time>
        </dd>
      </dl>
    </li>
  );
}

const RESUME_DATA = [
  {
    company: "MTM Diseño y Publicidad",
    title: "Team Leader",
    logo: logoMTM,
    start: "2024",
    end: { label: "Present", dateTime: new Date().getFullYear().toString() },
  },
  {
    company: "MTM Diseño y Publicidad",
    title: "Gestor de Base de Datos",
    logo: logoMTM,
    start: "2022",
    end: "2024",
  },
  {
    company: "Universidad Alberto Hurtado",
    title: "Profesor",
    logo: logoUAH,
    start: "2019",
    end: { label: "Present", dateTime: new Date().getFullYear().toString() },
  },
];

function Resume() {

  return (
    <div className="p-6 border rounded-2xl border-zinc-100 dark:border-zinc-700/40">
      <h2 className="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
        <BriefcaseIcon className="flex-none w-6 h-6" />
        <span className="ml-3">Experiencia de alto impacto</span>
      </h2>
      <ol className="mt-6 space-y-4">
        {RESUME_DATA.map((role, roleIndex) => (
          <Role key={roleIndex} role={role} />
        ))}
      </ol>
    </div>
  );
}

function Photos() {
  let rotations = ["-rotate-2", "rotate-2", "-rotate-2"];

  return (
    <div className="mt-16 sm:mt-20">
      <div className="flex justify-center gap-3 py-4 -my-4 overflow-hidden sm:gap-8">
        {[image2, image4, image5].map((image, imageIndex) => (
          <div
            key={image.src}
            className={clsx(
              "relative aspect-9/10 w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 ring-1 shadow-md shadow-zinc-800/5 ring-zinc-900/5 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 dark:ring-0",
              rotations[imageIndex % rotations.length]
            )}
          >
            <Image
              src={image}
              alt="photos"
              width={image.width}
              height={image.height}
              sizes="(min-width: 640px) 18rem, 11rem"
              className="absolute inset-0 object-cover w-full h-full"
              loading="lazy"
              quality={100}
            />
          </div>
        ))}
      </div>
    </div>
  );
}

export default async function Home() {
  let articles = (await getAllArticles()).slice(0, 4);

  return (
    <>
      <Container className="mt-9">
        <div className="max-w-2xl">
          <h1 className="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
            Desarrollo web a la velocidad de la luz
          </h1>
          <p className="mt-6 text-base text-zinc-600 dark:text-zinc-400">
            Combino estrategia empresarial y herramientas de IA avanzadas para 
            crear soluciones web excepcionales en tiempo récord. Mi metodología 
            revolucionaria reduce los tiempos de desarrollo hasta un 70% sin 
            comprometer la calidad ni la innovación.
          </p>
          <div className="flex gap-8 mt-6">
            <SocialLink
              href="https://www.instagram.com/diegof.herreragre"
              aria-label="Follow on Instagram"
              icon={InstagramIcon}
            />
            <SocialLink
              href="https://www.github.com/DiegoHerreraGre"
              aria-label="Follow on GitHub"
              icon={GitHubIcon}
            />
            <SocialLink
              href="https://www.linkedin.com/in/diego-f-herrera-gre/"
              aria-label="Follow on LinkedIn"
              icon={LinkedInIcon}
            />
          </div>
        </div>
      </Container>
      <Photos />
      <Container className="mt-32">
        <Suspense fallback={<div>Cargando...</div>}>
          <Pricing />
        </Suspense>
      </Container>
      <Container className="mt-2 md:mt-28">
        <div className="grid max-w-xl grid-cols-1 mx-auto gap-y-20 lg:max-w-none lg:grid-cols-2">
          <div className="flex flex-col gap-16">
            <h2 className="text-2xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100">
              Innovación a ritmo acelerado
            </h2>
            {articles.slice(-4, -1).map((article) => (
              <Article key={article.slug} article={article} />
            ))}
          </div>
          <div className="space-y-10 lg:pl-16 xl:pl-24">
            <Suspense fallback={<div>Cargando...</div>}>
              <Newsletter />
            </Suspense>
          </div>
        </div>
        <div className="mt-32">
          <Suspense fallback={<div>Cargando...</div>}>
            <Resume />
          </Suspense>
        </div>
      </Container>
    </>
  );
}
