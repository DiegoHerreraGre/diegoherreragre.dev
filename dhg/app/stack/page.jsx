"use client";

import { Suspense } from "react";
import Image from "next/image";
import Link from "next/link";

export default function Stack() {
  const techCategories = {
    Frontend: [
      {
        name: "JavaScript",
        slug: "javascript",
        description: "Lenguaje de programación web",
      },
      {
        name: "TypeScript",
        slug: "typescript",
        description: "Tipado estático para JavaScript",
      },
      {
        name: "React",
        slug: "react",
        description: "Biblioteca UI de componentes",
      },
      {
        name: "Alpine.js",
        slug: "alpinedotjs",
        description: "Framework de JavaScript para la web",
      },
      {
        name: "HTML",
        slug: "html5",
        description: "Estructura web moderna",
      },
      {
        name: "CSS",
        slug: "css",
        description: "Estilos y diseño web",
      },
      {
        name: "Astro",
        slug: "astro",
        description: "Framework de React para la web con SSR",
      },
      {
        name: "Next.js",
        slug: "nextdotjs",
        description: "Framework de React para la web con SSR",
      },
      {
        name: "Framer",
        slug: "framer",
        description:
          "Framework de diseño para la web para dar animaciones y efectos",
      },
      {
        name: "Bootstrap",
        slug: "bootstrap",
        description: "Framework de CSS para la web",
      },
      {
        name: "Handlebars",
        slug: "handlebarsdotjs",
        description: "Plantillas para HTML",
      },
    ],
    Backend: [
      {
        name: "Node.js",
        slug: "nodedotjs",
        description: "Runtime de JavaScript para servidor",
      },
      {
        name: "Supabase",
        slug: "supabase",
        description: "Base de datos SQL en la nube para backend",
      },
      {
        name: "NestJS",
        slug: "nestjs",
        description: "Framework de Node.js para backend",
      },
      {
        name: "Express",
        slug: "express",
        description: "Framework web para Node.js para uso de Backend",
      },
      {
        name: "MongoDB",
        slug: "mongodb",
        description: "Base de datos NoSQL - No relacionales",
      },
      {
        name: "JSON",
        slug: "json",
        description: "Formato de intercambio de datos",
      },
      {
        name: "PHP",
        slug: "php",
        description: "Lenguaje de programación para desarrollo web",
      },
      {
        name: "MySQL",
        slug: "mysql",
        description: "Sistema de gestión de bases de datos relacionales",
      },
      {
        name: "Turso",
        slug: "turso",
        description: "Base de datos SQL en la nube",
      },
      {
        name: "Python",
        slug: "python",
        description: "Lenguaje versátil para backend y scripting",
      },
      {
        name: "Django",
        slug: "django",
        description: "Framework de Python para backend y frontend",
      },
      {
        name: "Rust",
        slug: "rust",
        description:
          "Lenguaje de sistemas de alto rendimiento (en aprendizaje)",
      },
      {
        name: "Composer",
        slug: "composer",
        description: "Gestor de dependencias de PHP",
      },
    ],
    DevOps: [
      {
        name: "TS Node",
        slug: "tsnode",
        description: "Bundler de TypeScript para Node.js",
      },
      {
        name: "Wappalyzer",
        slug: "wappalyzer",
        description: "Identificación de tecnologías utilizadas en un sitio web",
      },
      {
        name: "Webpack",
        slug: "webpack",
        description: "Empaquetador de módulos para JavaScript",
      },
      {
        name: "Vercel",
        slug: "vercel",
        description: "Plataforma de deployment",
      },
      { name: "Git", slug: "git", description: "Control de versiones" },
      {
        name: "GitHub",
        slug: "github",
        description: "Hosting de repositorios",
      },
      {
        name: "Git LFS",
        slug: "gitlfs",
        description: "Control de versiones de archivos grandes",
      },
      {
        name: "GitHub Pages",
        slug: "githubpages",
        description: "Hosting de páginas web estáticas",
      },
    ],
    "CMS & SEO": [
      {
        name: "Strapi",
        slug: "strapi",
        description:
          "Sistema de gestión de contenidos novedoso y autohospedado",
      },
      {
        name: "Docker",
        slug: "docker",
        description: "Contenedorización de aplicaciones",
      },
      {
        name: "WordPress",
        slug: "wordpress",
        description: "Sistema de gestión de contenidos",
      },
      {
        name: "Google",
        slug: "google",
        description: "Suite de herramientas SEO",
      },
      {
        name: "Meta",
        slug: "meta",
        description: "Marketing en redes sociales",
      },
    ],
    "Herramientas de terminal": [
      {
        name: "PM2",
        slug: "pm2",
        description: "Gestión de procesos en Node.js",
      },
      {
        name: "Mac OS",
        slug: "macos",
        description: "Sistema operativo para macOS desde donde trabajo",
      },
      {
        name: "Bash",
        slug: "gnubash",
        description: "Shell interactiva y personalizable",
      },
      {
        name: "Zsh",
        slug: "zsh",
        description: "Shell interactiva y personalizable",
      },
      {
        name: "curl",
        slug: "curl",
        description: "Herramienta de transferencia de datos",
      },
      {
        name: "Homebrew",
        slug: "homebrew",
        description: "Gestor de paquetes para macOS",
      },
      {
        name: "NVM",
        slug: "nvm",
        description: "Gestor de versiones de Node.js",
      },
      {
        name: "Apache",
        slug: "apache",
        description: "Servidor web tradicional",
      },
      {
        name: "NGINX",
        slug: "nginxproxymanager",
        description: "Servidor web de alto rendimiento",
      },
      {
        name: "Neovim",
        slug: "neovim",
        description: "Editor de texto avanzado desde la terminal",
      },
      {
        name: "Metasploit",
        slug: "metasploit",
        description: "Framework de explotación de vulnerabilidades",
      },
    ],
  };

  const TechIcon = ({ slug, name }) => {
    return (
      <div className="relative w-6 h-6 mr-3">
        <Image
          src={`/${slug}.svg`}
          alt={`${name} icon`}
          width={24}
          height={24}
          className={`object-contain dark:invert`}
          loading="lazy"
          quality={100}
        />
      </div>
    );
  };

  return (
    <div className="w-full max-w-4xl p-6 mx-auto mt-12">
      <h2 className="mb-8 text-6xl font-bold text-center">Stack Tecnológico</h2>
      <div className="space-y-8">
        <Suspense fallback={<div>Cargando...</div>}>
          <Editor />
        </Suspense>
        {Object.entries(techCategories).map(([category, technologies]) => (
          <div key={category} className="p-6 rounded-lg bg-white/5">
            <h3 className="mb-4 text-xl font-semibold">{category}</h3>
            <div className="overflow-x-auto">
              <table className="min-w-full divide-y divide-gray-700">
                <thead>
                  <tr>
                    <th className="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-800 uppercase dark:text-gray-200">
                      Tecnología
                    </th>
                    <th className="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-800 uppercase dark:text-gray-200">
                      Descripción
                    </th>
                  </tr>
                </thead>
                <tbody className="divide-y divide-gray-700">
                  {technologies.map((tech) => (
                    <tr
                      key={tech.slug}
                      className="transition-colors hover:bg-white/5"
                    >
                      <td className="px-6 py-4 whitespace-nowrap">
                        <div className="flex items-center">
                          <TechIcon slug={tech.slug} name={tech.name} />
                          <span>{tech.name}</span>
                        </div>
                      </td>
                      <td className="px-6 py-4">
                        <span className="text-gray-800 dark:text-gray-200">
                          {tech.description}
                        </span>
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

export const Editor = () => {
  return (
    <div className="w-full max-w-4xl p-6 mx-auto mt-12">
      <h2 className="mb-8 text-3xl font-bold text-center">
        Cursor: El IDE del Futuro
      </h2>
      <div className="space-y-8">
        <div className="p-6 rounded-lg bg-white/5">
          <div className="flex flex-col flex-wrap items-center justify-center gap-4">
            <Suspense fallback={<div>Cargando...</div>}>
            <Link href={"https://www.cursor.com"}>
              <Image
                src="/cursor.webp"
                alt="Cursor icon"
                width={340}
                height={340}
                quality={100}
                priority
                  className="my-12 mr-3 transition-transform hover:scale-105"
                />
              </Link>
            </Suspense>
            <div className="p-6 mx-auto my-12 max-w-7xl">
            <Suspense fallback={<div>Cargando...</div>}>
              <Image
                src="/cursorimage.webp"
                alt="Cursor image"
                width={1920}
                height={1080}
                quality={100}
                priority
                  className="transition-shadow shadow-lg rounded-2xl hover:shadow-xl"
                />
              </Suspense>
              <div className="mt-8 space-y-4">
                <p className="text-justify text-gray-800 dark:text-gray-200">
                  Cursor representa la evolución de los entornos de desarrollo,
                  combinando la familiaridad de Visual Studio Code con mejoras
                  revolucionarias en rendimiento y eficiencia. Su arquitectura
                  optimizada permite un flujo de trabajo fluido, incluso en
                  proyectos de gran escala.
                </p>
                <p className="text-justify text-gray-800 dark:text-gray-200">
                  Con un consumo de recursos significativamente menor que su
                  predecesor, Cursor ofrece tiempos de respuesta instantáneos y
                  una experiencia de desarrollo sin interrupciones. Su motor de
                  renderizado optimizado elimina la sobrecarga típica de los
                  editores basados en web, proporcionando un entorno
                  verdaderamente nativo.
                </p>
                <p className="text-justify text-gray-800 dark:text-gray-200">
                  Más que un simple editor, Cursor integra herramientas
                  avanzadas de inteligencia artificial que asisten en la
                  escritura de código, detección de errores y optimización de
                  rendimiento. Su interfaz minimalista y altamente
                  personalizable se adapta a las necesidades de cada
                  desarrollador, ofreciendo una experiencia verdaderamente
                  personalizada.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 className="my-8 text-3xl font-bold text-center">Terminal</h2>
      <div className="space-y-8">
        <div className="p-6 rounded-lg bg-white/5">
          <div className="flex flex-col flex-wrap items-center justify-center gap-4">
            <Suspense fallback={<div>Cargando...</div>}>
            <Link href={"https://www.warp.dev"}>
              <Image
                src="/warp.webp"
                alt="Warp icon"
                width={340}
                height={340}
                quality={100}
                priority
                className="my-12 mr-3"
              />
            </Link>
            <Image
              src="/warpimage.webp"
              alt="Warp image"
              width={1920}
              height={1080}
              quality={100}
                priority
                className="mb-12 shadow-2xl rounded-2xl"
              />
            </Suspense>
            <p className="text-justify text-gray-800 dark:text-gray-200">
              Warp es una terminal de nueva generación que redefine la forma en
              que los desarrolladores interactúan con su consola. Diseñada para
              maximizar la productividad, incluye características únicas como
              autocompletado inteligente en tiempo real, resaltado de sintaxis
              avanzado y una interfaz moderna e intuitiva que facilita el flujo
              de trabajo.
            </p>
            <p className="text-justify text-gray-800 dark:text-gray-200">
              Construida con Rust, Warp combina un rendimiento sobresaliente con
              eficiencia en el uso de recursos, ofreciendo tiempos de respuesta
              instantáneos y una experiencia fluida incluso en los proyectos más
              demandantes. Además, integra herramientas colaborativas y
              funcionalidades adaptadas a las necesidades de los equipos
              modernos, posicionándola como una herramienta imprescindible para
              desarrolladores que buscan innovación y eficiencia.
            </p>
          </div>
        </div>
      </div>
    </div>
  );
};
