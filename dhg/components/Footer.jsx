import Link from "next/link";
import Image from "next/image";
import Tailwind from "@/images/logos/tailwind.svg";
import NextJS from "@/images/logos/nextjs.svg";
import MySQL from "@/images/logos/mysql.svg";

import { ContainerInner, ContainerOuter } from "@/components/Container";

function NavLink({ href, children }) {
  return (
    <Link
      href={href}
      className="transition hover:text-teal-500 dark:hover:text-teal-400"
    >
      {children}
    </Link>
  );
}

export function Footer() {
  return (
    <footer className="flex-none mt-32">
      <ContainerOuter>
        <div className="pt-10 pb-16 border-t border-zinc-100 dark:border-zinc-700/40">
          <ContainerInner>
            <div className="flex flex-col items-center justify-between gap-6 sm:flex-row">
              <div className="flex flex-wrap justify-center text-sm font-medium gap-x-6 gap-y-1 text-zinc-800 dark:text-zinc-200">
                <NavLink href="/about">Sobre mí</NavLink>
                <NavLink href="/articles">Artículos</NavLink>
                <NavLink href="/projects">Proyectos</NavLink>
              </div>
              <p className="text-sm text-zinc-400 dark:text-zinc-500">
                &copy; {new Date().getFullYear()} Diego Herrera Gre. Todos los
                derechos reservados.
              </p>
              <div className="flex items-center gap-4">
                <div className="flex items-center gap-2 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                  <p>Tecnologías usadas</p>
                  <div className="flex items-center gap-4 rounded-2xl bg-slate-200/80 p-2.5 shadow-xs ring-1 ring-zinc-200 transition-colors hover:bg-slate-300/70 dark:bg-zinc-800/80 dark:ring-zinc-700/40 dark:hover:bg-zinc-700/70">
                    <Image
                      width={16}
                      height={16}
                      src={NextJS}
                      alt="Next.js Logo"
                      className="transition-transform hover:scale-150 dark:invert"
                      quality={100}
                      loading="lazy"
                    />
                    <Image
                      width={16}
                      height={16}
                      src={Tailwind}
                      alt="Tailwind CSS Logo"
                      className="transition-transform hover:scale-150 dark:invert"
                      quality={100}
                      loading="lazy"
                    />
                    <Image
                      width={16}
                      height={16}
                      src={MySQL}
                      alt="MySQL Logo"
                      className="transition-transform hover:scale-150 dark:invert"
                      quality={100}
                      loading="lazy"
                    />
                  </div>
                </div>
              </div>
            </div>
          </ContainerInner>
        </div>
      </ContainerOuter>
    </footer>
  );
}
