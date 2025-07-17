"use client";

import Image from "next/image";

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
