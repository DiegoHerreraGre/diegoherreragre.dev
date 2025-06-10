import Image from 'next/image'
import { Card } from '@/components/Card'
import { SimpleLayout } from '@/components/SimpleLayout'
import NextJS from '@/images/logos/nextjs.svg'
import Tailwind from '@/images/logos/tailwind.svg'
import MongoDB from '@/images/logos/mongodb.svg'
import React from '@/images/logos/reactjs.svg'
import Strapi from '@/images/logos/strapi.svg'
import PHP from '@/images/logos/php.svg'
import WordPress from '@/images/logos/wordpress.svg'
import MySQL from '@/images/logos/mysql.svg'

const projects = [
  {
    name: 'Armando Di Filippo',
    description:
      'Sitio web del reconocido economista argentino, docente e investigador universitario con 40 años de experiencia en instituciones como CEPAL. Especializado en política económica, desarrollo social y pensamiento latinoamericano. El sitio presenta su extensa obra académica, publicaciones y pensamiento económico desarrollado a lo largo de su destacada trayectoria en América Latina',
    link: {
      href: 'https://www.armandodifilippo.com',
      label: 'Armando Di Filippo',
    },
    logo: NextJS,
    production: true,
    tailwind: true,
    mongodb: true,
    creation: false,
    strapi: false,
    wordpress: false,
  },
  {
    name: 'MTM Diseño y Publicidad',
    description:
      'Nuevo sitio web para MTM basado en Next JS y Node JS en el backend, como una propuesta para innovar la imagen, con un pequeño rebranding del logo, una mejor interactividad con el cliente, grandes mejoras en la UI/UX, y ante todo, la propuesta para levantar nuevas webs usando las herramientas de la actualidad',
    link: {
      href: 'https://www.nuevo.mtm.cl',
      label: 'MTM',
    },
    logo: NextJS,
    production: false,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    wordpress: false,
    MySQL: true,
  },
  {
    name: 'Estoril 820 - FDI',
    description:
      'Sitio web inmobiliario moderno construido con tecnologías de última generación para reemplazar la antigua versión en WordPress. Diseñado con un enfoque dinámico de marketing digital para maximizar las ventas de propiedades. La arquitectura headless garantiza tiempos de carga ultrarrápidos y una experiencia de usuario fluida optimizada para conversiones',
    link: {
      href: 'https://www.estoril820.cl',
      label: 'Estoril 820',
    },
    logo: PHP,
    production: true,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    wordpress: true,
    MySQL: true,
  },
  {
    name: 'San Isidro - Landing',
    description:
      'Landing inmobiliario para cliente San Isidro para inscripciones de ofertas para el Black Friday 2024. El sitio se propone como una alternativa a los landings de WordPress del cliente para mejorar la convertibilidad y velocidad más una mejora sustantiva del SEO manual.',
    link: {
      href: 'https://sanisidro.mtmdigital.cl/black-friday-ventas',
      label: 'San Isidro',
    },
    logo: NextJS,
    production: true,
    tailwind: false,
    mongodb: true,
    creation: false,
    strapi: false,
    MySQL: false,
  },
  {
    name: 'Andrés Herrera Gré',
    description:
      'Propuesta de sitio web para psicólogo Andrés Herrera Gré, quien busca expandir su presencia en el mercado y ofrecer servicios de psicoterapia a través de una plataforma moderna y accesible.',
    link: {
      href: 'https://www.andresherreragre.cl',
      label: 'Andrés Herrera Gré',
    },
    logo: PHP,
    production: false,
    tailwind: true,
    mongodb: true,
    creation: false,
    strapi: false,
    wordpress: true,
    MySQL: true,
  },
  {
    name: 'Línea Ética - Lo Campino',
    description:
      'Nueva versión de la web para la empresa Lo Campino donde se registran las denuncias internas de la empresa. Además de una mejor propuesta UI/UX, tenemos un sistema de registro interno con una base de datos clara, un gestor de contenido en el backend y una web totalmente responsive para cualquier dispositivo.',
    link: {
      href: 'https://lineaetica-locampino.cl',
      label: 'Línea Ética',
    },
    logo: PHP,
    production: true,
    tailwind: true,
    mongodb: true,
    creation: false,
    strapi: false,
    wordpress: true,
    MySQL: true,
  },
  {
    name: 'Retail Financiero - ONG',
    description:
      'Diseño y desarrollo de la nueva web con propuesta de CMS en el backend para Retail Financiero, una plataforma dedicada a ofrecer asesoramiento financiero especializado en el mercado de retail en Chile. La web proporciona recursos y herramientas para ayudar a los usuarios a tomar decisiones financieras informadas y efectivas.',
    link: {
      href: 'https://nuevo.retailfinanciero.cl',
      label: 'Retail Financiero',
    },
    logo: PHP,
    production: false,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    wordpress: true,
    MySQL: true,
  },
  {
    name: 'Último Stock',
    description:
      'Último Stock es una web de venta de últimas unidades de productos inmobiliarios, con un enfoque en la experiencia del usuario y la velocidad de carga. Mejoramos la UI/UX y creamos un registro de cotizaciones para el cliente.',
    link: {
      href: 'https://ultimostock.cl',
      label: 'Último Stock',
    },
    logo: PHP,
    production: true,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    wordpress: true,
    MySQL: true,
  },
  {
    name: 'Landing Propuesta - Max Coloma',
    description:
      'Landing para Max Coloma Propiedades. Construido con tecnologías modernas para garantizar un rendimiento óptimo y una experiencia de usuario fluida. Cambia la propuesta antigua de su web por un nuevo enfoque mejorado de la UI/UX, la velocidad y la usabilidad.',
    link: {
      href: 'https://www.maxcoloma.mtmdigital.cl',
      label: 'Max Coloma Propiedades',
    },
    logo: NextJS,
    production: false,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    MySQL: true,
  },
  {
    name: 'Molina Morel - Web',
    description:
      'Nueva web para Molina Morel con un enfoque revalidado en base a Tailwind CSS y WordPress en combinación. Se propone una web moderna y funcional para mejorar la experiencia del usuario y las conversiones de ventas.',
    link: {
      href: 'https://www.molinamorel.mtmdigital.cl',
      label: 'Molina Morel',
    },
    logo: PHP,
    production: true,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    wordpress: true,
    MySQL: true,
  },
  {
    name: 'Landing Coloso Days - Grupo Coloso',
    description:
      'Página de aterrizaje creada para la campaña de Coloso Days, centrada en incrementar conversiones a través de promociones continuas y seductoras, orientada al cliente Grupo Coloso. El proyecto se distingue por su énfasis en la optimización y el alto rendimiento.',
    link: {
      href: 'https://www.grupocoloso.mtmdigital.cl',
      label: 'Coloso Days',
    },
    logo: NextJS,
    production: true,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    MySQL: true,
  },
  {
    name: 'Landing Barrio Cueto - Urmeneta GI',
    description:
      'Landing page diseñada para la campaña de Barrio Cueto, enfocada en maximizar conversiones mediante ofertas constantes y atractivas, dirigida al cliente Urmeneta GI. El proyecto destaca por su enfoque en optimización y rendimiento.',
    link: {
      href: 'https://www.barriocueto.cl',
      label: 'Barrio Cueto',
    },
    logo: NextJS,
    production: true,
    tailwind: true,
    mongodb: true,
    creation: false,
    strapi: false,
    MySQL: false,
  },
  {
    name: 'Cyber Molina Morel',
    description:
      'Sitio web inmobiliario moderno desarrollado con las últimas tecnologías web para mejorar la experiencia del usuario y las conversiones de ventas. Construido con una arquitectura headless que asegura un rendimiento óptimo y tiempos de carga mínimos. Cuenta con un sistema de filtrado avanzado de propiedades, visualización de imágenes en alta resolución',
    link: {
      href: 'https://www.cybermolinamorel.cl',
      label: 'Cyber Molina Morel',
    },
    logo: NextJS,
    production: true,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    MySQL: true,
  },
  {
    name: 'Avellaneda Constructora',
    description:
      'Plataforma web especializada en servicio post venta para Avellaneda Constructora. Diseñada para facilitar el seguimiento de reparaciones, mantenimiento y atención al cliente después de la entrega de propiedades. Incluye sistema de tickets, seguimiento en tiempo real del estado de solicitudes y comunicación directa con el equipo de post venta',
    link: {
      href: 'https://avellaneda.cl',
      label: 'Avellaneda Constructora',
    },
    logo: PHP,
    production: true,
    tailwind: true,
    mongodb: false,
    creation: false,
    strapi: false,
    wordpress: true,
    MySQL: true,
  },
  {
    name: 'Landing Black/Cyber - Inmobiliaria Manquehue',
    description:
      'Landing para la Inmobiliaria Manquehue usado para Cyber Day y Black Friday. Diseñado para maximizar las conversiones de ventas de propiedades. Construido con tecnologías modernas para garantizar un rendimiento óptimo y una experiencia de usuario fluida. Incluye un sistema de chat en vivo para atención al cliente en tiempo real',
    link: {
      href: 'https://www.imanquehue.mtmdigital.cl',
      label: 'Landing Inmobiliaria Manquehue',
    },
    logo: React,
    production: true,
    tailwind: false,
    mongodb: true,
    creation: false,
    strapi: false,
    MySQL: true,
  },
]

function LinkIcon(props) {
  return (
    <svg viewBox="0 0 24 24" aria-hidden="true" {...props}>
      <path
        d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z"
        fill="currentColor"
      />
    </svg>
  )
}

export const metadata = {
  title: 'Proyectos',
  description: 'Webs creadas últimamente',
}

export const dynamic = 'force-dynamic'

export default function Projects() {
  const shuffledProjects = [...projects].sort(() => Math.random() - 0.5)

  return (
    <SimpleLayout
      title="Webs creadas últimamente"
      intro="A lo largo de mi trayectoria como desarrollador web full-stack, he creado diversos proyectos web implementando las últimas tecnologías como Next.js para el renderizado del lado del servidor (SSR), React para interfaces de usuario dinámicas, TailwindCSS para estilos modernos y responsivos, Prisma como el ORM y su conexión a bases de datos, y Node.js para el backend. También utilizo WordPress y MySQL, y a menudo mezclo estas tecnologías para aprovechar lo mejor de cada una. Utilizo npm como gestor de paquetes por su estabilidad. Mi enfoque se centra en crear aplicaciones web rápidas, escalables y con excelente experiencia de usuario, aplicando las mejores prácticas de desarrollo."
    >
      <ul
        role="list"
        className="grid grid-cols-1 gap-x-12 gap-y-16 sm:grid-cols-2 lg:grid-cols-3"
      >
        {shuffledProjects.map((project) => (
          <Card as="li" key={project.name}>
            <div className="relative z-10 flex h-12 w-12 items-center justify-center rounded-full bg-white shadow-md ring-1 shadow-zinc-800/5 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-white dark:ring-0">
              <Image
                width={32}
                height={32}
                src={project.logo}
                alt="logos de tecnologías utilizadas en el proyecto"
                className="h-8 w-8"
                placeholder="blur"
                blurDataURL="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDABQODxIPDRQSEBIXFRQdHx4dHRsdHR4dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/2wBDAR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/wAARCAAIAAoDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAb/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCdABmX/9k="
                quality={75}
              />
            </div>
            <h2 className="mt-6 text-base font-semibold text-zinc-800 dark:text-zinc-100">
              <Card.Link href={project.link.href}>{project.name}</Card.Link>
            </h2>
            <Card.Description>{project.description}</Card.Description>
            {!project.production && !project.creation && (
              <div className="z-10 mt-6 flex items-center justify-center">
                <span className="inline-flex items-center rounded-full border border-yellow-200 bg-yellow-100 px-4 py-1 text-sm font-medium text-yellow-800 dark:border-yellow-700/50 dark:bg-yellow-900/30 dark:text-yellow-300">
                  <svg className="mr-2 h-4 w-4" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M12 16V12L14 14M12 8V8.01M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                      stroke="currentColor"
                      strokeWidth="2"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                  En desarrollo
                </span>
              </div>
            )}
            {project.production && (
              <div className="z-10 mt-6 flex items-center justify-center">
                <span className="inline-flex items-center rounded-full border border-green-200 bg-green-100 px-4 py-1 text-sm font-medium text-green-800 dark:border-green-700/50 dark:bg-green-900/30 dark:text-green-300">
                  <svg className="mr-2 h-4 w-4" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                      stroke="currentColor"
                      strokeWidth="2"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                  En producción
                </span>
              </div>
            )}
            {!project.production && project.creation && (
              <div className="z-10 mt-6 flex items-center justify-center">
                <span className="inline-flex items-center rounded-full border border-pink-200 bg-pink-100 px-4 py-1 text-sm font-medium text-pink-800 dark:border-pink-700/50 dark:bg-pink-900/30 dark:text-pink-300">
                  <svg className="mr-2 h-4 w-4" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M2 21l1.5-1.5L8 15l-1.5-1.5L2 18v3zm2-2l1.5-1.5L8 13l-1.5-1.5L4 17v2zm2-2l1.5-1.5L8 11l-1.5-1.5L6 15v1zm2-2l1.5-1.5L8 9l-1.5-1.5L8 13v-1zm2-2l1.5-1.5L8 7l-1.5-1.5L10 11V9zm2-2l1.5-1.5L8 5l-1.5-1.5L12 9V7zm2-2l1.5-1.5L8 3l-1.5-1.5L14 7V5zm2-2l1.5-1.5L8 1l-1.5-1.5L16 5V3zm2-2l1.5-1.5L8 0l-1.5-1.5L18 3V1z"
                      stroke="currentColor"
                      strokeWidth="2"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                  En creación
                </span>
              </div>
            )}
            {project.tailwind && (
              <div className="z-10 mt-6 flex items-center space-x-2 rounded-lg bg-blue-50 p-2 text-sm font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-200">
                <span>Desarrollado con</span>
                <Image
                  src={Tailwind}
                  width={20}
                  height={20}
                  className="inline-block"
                  alt="Tailwind logo"
                  loading="lazy"
                  placeholder="blur"
                  blurDataURL="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDABQODxIPDRQSEBIXFRQdHx4dHRsdHR4dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/2wBDAR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/wAARCAAIAAoDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAb/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCdABmX/9k="
                  quality={75}
                />
                <span className="font-semibold text-blue-600 dark:text-blue-300">
                  Tailwind UI Plus
                </span>
              </div>
            )}
            {project.strapi && (
              <div className="z-10 mt-6 flex items-center space-x-2 rounded-lg bg-indigo-50 p-2 text-sm font-medium text-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-200">
                <span>CMS con</span>
                <Image
                  src={Strapi}
                  width={20}
                  height={20}
                  className="inline-block"
                  alt="Strapi logo"
                  loading="lazy"
                  placeholder="blur"
                  blurDataURL="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDABQODxIPDRQSEBIXFRQdHx4dHRsdHR4dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/2wBDAR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/wAARCAAIAAoDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAb/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCdABmX/9k="
                  quality={75}
                />
                <span className="font-semibold text-indigo-600 dark:text-indigo-300">
                  Strapi
                </span>
              </div>
            )}
            {project.wordpress && (
              <div className="items-cente z-10 mt-6 flex space-x-2 rounded-lg bg-blue-200 p-2 text-sm font-medium text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
                <span>CMS con</span>
                <Image
                  src={WordPress}
                  width={20}
                  height={20}
                  className="inline-block"
                  alt="WordPress logo"
                  loading="lazy"
                  placeholder="blur"
                  blurDataURL="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDABQODxIPDRQSEBIXFRQdHx4dHRsdHR4dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/2wBDAR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/wAARCAAIAAoDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAb/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCdABmX/9k="
                  quality={75}
                />
                <span className="font-semibold text-blue-600 dark:text-blue-300">
                  WordPress
                </span>
              </div>
            )}
            {project.MySQL && (
              <div className="items-cente z-10 mt-6 flex space-x-2 rounded-lg bg-amber-50 p-2 text-sm font-medium text-amber-800 dark:bg-amber-900/30 dark:text-amber-200">
                <span>Bases de datos con</span>
                <Image
                  src={MySQL}
                  width={20}
                  height={20}
                  className="inline-block"
                  alt="MongoDB logo"
                  loading="lazy"
                  placeholder="blur"
                  blurDataURL="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDABQODxIPDRQSEBIXFRQdHx4dHRsdHR4dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/2wBDAR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/wAARCAAIAAoDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAb/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCdABmX/9k="
                  quality={75}
                />
                <span className="font-semibold text-amber-600 dark:text-amber-300">
                  MySQL
                </span>
              </div>
            )}
            {project.mongodb && (
              <div className="items-cente z-10 mt-6 flex space-x-2 rounded-lg bg-green-50 p-2 text-sm font-medium text-green-800 dark:bg-green-900/30 dark:text-green-200">
                <span>Bases de datos con</span>
                <Image
                  src={MongoDB}
                  width={20}
                  height={20}
                  className="inline-block"
                  alt="MongoDB logo"
                  loading="lazy"
                  placeholder="blur"
                  blurDataURL="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDABQODxIPDRQSEBIXFRQdHx4dHRsdHR4dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/2wBDAR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR0dHR3/wAARCAAIAAoDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAb/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCdABmX/9k="
                  quality={75}
                />
                <span className="font-semibold text-green-600 dark:text-green-300">
                  MongoDB
                </span>
              </div>
            )}
            <p className="relative z-10 mt-6 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200">
              <LinkIcon className="h-6 w-6 flex-none" />
              <span className="ml-2">{project.link.label}</span>
            </p>
          </Card>
        ))}
      </ul>
    </SimpleLayout>
  )
}
