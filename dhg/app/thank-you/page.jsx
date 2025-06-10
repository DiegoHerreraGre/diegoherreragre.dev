import { SimpleLayout } from '@/components/SimpleLayout'
import Link from 'next/link'

export const metadata = {
  title: '¡Gracias por tu mensaje!',
  description: 'Me contactaré contigo prontamente.',
}

export default function ThankYou() {
  return (
    <motion
      initial={{ opacity: 0, y: 20 }}
      animate={{ opacity: 1, y: 0 }}
      transition={{ duration: 0.5 }}
    >
      <SimpleLayout
        title={
          <span className="font-bold text-zinc-800 dark:text-zinc-100">
            ¡Gracias por tu mensaje!
          </span>
        }
        intro={
          <div className="space-y-4">
            <p className="text-lg text-zinc-600 dark:text-zinc-400">
              Me contactaré contigo lo más pronto posible. Mientras tanto,
              puedes revisar mi blog o proyectos.
            </p>
            <div className="flex gap-4">
              <Link
                href="/articles"
                className="rounded-md bg-zinc-800 px-4 py-2 text-zinc-100 transition-colors hover:bg-zinc-700 dark:bg-zinc-700 dark:hover:bg-zinc-600"
              >
                Ver artículos
              </Link>
              <Link
                href="/projects"
                className="rounded-md border border-zinc-300 px-4 py-2 text-zinc-800 transition-colors hover:bg-zinc-100 dark:border-zinc-700 dark:text-zinc-100 dark:hover:bg-zinc-800"
              >
                Ver Proyectos
              </Link>
            </div>
          </div>
        }
      />
    </motion>
  )
}
