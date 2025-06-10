export const metadata = {
  title: 'Política de Seguridad',
  description:
    'Política de seguridad básica para el manejo de datos y protección de la información.',
}

export default function SecurityPolicy() {
  return (
    <div className="container mx-auto mt-16 px-4 sm:px-6 lg:px-48">
      <h1 className="text-3xl font-bold text-zinc-800 sm:text-4xl dark:text-zinc-100">
        Política de Seguridad
      </h1>
      <div className="mt-6 space-y-4 text-sm text-zinc-600 sm:text-base dark:text-zinc-400">
        <p>
          En mi trabajo, la seguridad de la información es una prioridad. Me
          comprometo a proteger la confidencialidad, integridad y disponibilidad
          de los datos que manejo.
        </p>
        <h2 className="text-xl font-semibold text-zinc-800 sm:text-2xl dark:text-zinc-100">
          Contacto
        </h2>
        <p>
          Para reportar cualquier incidente de seguridad, por favor contáctame
          a:{' '}
          <a
            href="mailto:dherrera@mtm.cl"
            className="text-teal-500 hover:underline"
          >
            dherrera@mtm.cl
          </a>
        </p>
        <h2 className="text-xl font-semibold text-zinc-800 sm:text-2xl dark:text-zinc-100">
          Encriptación
        </h2>
        <p>
          Utilizo encriptación avanzada para proteger los datos sensibles.
          Puedes encontrar mi clave PGP en:{' '}
          <a
            href="https://diegoherreragre.dev/pgp-key.txt"
            className="text-teal-500 hover:underline"
          >
            PGP Key
          </a>
        </p>
        <h2 className="text-xl font-semibold text-zinc-800 sm:text-2xl dark:text-zinc-100">
          Idiomas Preferidos
        </h2>
        <p>
          Acepto reportes de seguridad en los siguientes idiomas: Inglés,
          Español.
        </p>
        <h2 className="text-xl font-semibold text-zinc-800 sm:text-2xl dark:text-zinc-100">
          Política
        </h2>
        <p>
          Mi política de seguridad completa está disponible en:{' '}
          <a
            href="https://diegoherreragre.dev/security-policy"
            className="text-teal-500 hover:underline"
          >
            Política de Seguridad
          </a>
        </p>
      </div>
    </div>
  )
}
