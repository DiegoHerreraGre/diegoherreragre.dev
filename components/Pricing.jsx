import { CheckIcon } from '@heroicons/react/20/solid'

const tiers = [
  {
    name: 'Landing Page Básica',
    id: 'tier-basic',
    description:
      'Página de aterrizaje ideal para promocionar un producto o servicio con desarrollo ultrarrápido',
    features: [
      'Diseño con TailwindCSS',
      'Landing responsive',
      'MySQL activo',
      'GA4 incluido',
      'Reportería básica',
      'Soporte técnico 8/5',
    ],
    mostPopular: false,
  },
  {
    name: 'Sitio Web Profesional',
    id: 'tier-pro',
    description: 'Sitio web completo desarrollado con IA para pequeñas y medianas empresas',
    features: [
      'Todo lo del plan básico más:',
      'Hasta 5 páginas',
      'Nodemailer activo',
      'Soporte técnico 8/5',
      'SSR y optimización SEO',
      'Firewall refinado',
    ],
    mostPopular: true,
  },
  {
    name: 'Solución Empresarial',
    id: 'tier-enterprise',
    description: 'Desarrollo web personalizado con estrategia IA para grandes empresas',
    features: [
      'Todo lo del plan profesional más:',
      'Páginas ilimitadas',
      'Backend personalizado',
      'Nodemailer Enterprise',
      'Firewall refinado',
      'Activación HSTS',
      'Soporte técnico 24/7',
      'Desarrollo a medida',
    ],
    mostPopular: false,
  },
  {
    name: 'Plan de Migración',
    id: 'tier-migration',
    description: 'Actualiza tu sitio web a tecnologías modernas a velocidad récord',
    features: [
      'Migración de contenido',
      'Evaluación de sitio web',
      'Evaluación de seguridad',
      'Capacitación técnica',
      '1 mes de soporte',
    ],
    mostPopular: false,
  },
  {
    name: 'Mantenimiento Web',
    id: 'tier-maintenance',
    description: 'Mantén tu sitio web funcionando de manera óptima con monitoreo inteligente',
    features: [
      'Actualizaciones de seguridad',
      'Backups diarios',
      'Monitoreo 24/7',
      'Soporte técnico',
      'Ajustes menores',
      'Informes mensuales',
      'SLA garantizado',
    ],
    mostPopular: true,
  },
  {
    name: 'Desarrollo Avanzado de API',
    id: 'tier-advanced',
    description: 'Desarrollo de API escalables con arquitectura de alto rendimiento',
    features: [
      'API RESTful',
      'Integración de APIs',
      'Soporte técnico 8/5',
      'Desarrollo a medida',
      'CI/CD personalizado',
      'Arquitectura escalable',
    ],
    mostPopular: false,
  },
]

function classNames(...classes) {
  return classes.filter(Boolean).join(' ')
}

export default function Pricing() {
  return (
    <div className="bg-white dark:bg-[#08080A]">
      <div className="mx-auto max-w-7xl px-6 lg:px-8">
        <div className="mx-auto max-w-4xl text-center">
          <p className="mt-2 animate-pulse text-5xl font-semibold tracking-tight text-balance text-gray-900 antialiased sm:text-6xl dark:text-gray-200">
            Soluciones a velocidad empresarial
          </p>
        </div>
        <p className="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-gray-600 sm:text-xl/8 dark:text-gray-400">
          Cada plan está diseñado para maximizar la velocidad de desarrollo 
          combinando estrategia empresarial con inteligencia artificial avanzada.
        </p>
        <div className="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
          {tiers.map((tier, tierIdx) => (
            <div
              key={tier.id}
              className={classNames(
                tier.mostPopular
                  ? 'transition-all duration-300 hover:scale-110 lg:z-10 lg:rounded-[2rem] lg:hover:rounded-[5.5rem]'
                  : 'lg:mt-8',
                tierIdx === 0
                  ? 'lg:rounded-tr-[2rem] lg:rounded-bl-[1rem]'
                  : '',
                tierIdx === tiers.length - 1
                  ? 'lg:rounded-tl-[2rem] lg:rounded-br-[1rem]'
                  : '',
                'flex flex-col justify-between rounded-3xl bg-white p-8 ring-1 ring-gray-200 xl:p-10 dark:bg-slate-700',
              )}
            >
              <div>
                <div className="flex items-center justify-between gap-x-4">
                  <h3
                    id={tier.id}
                    className={classNames(
                      tier.mostPopular
                        ? 'text-teal-600 dark:text-teal-300'
                        : 'text-gray-900 dark:text-gray-300',
                      'text-lg/8 font-semibold',
                    )}
                  >
                    {tier.name}
                  </h3>
                  {tier.mostPopular ? (
                    <p className="rounded-full bg-teal-600/10 px-2.5 py-1 text-center text-xs/5 font-semibold text-teal-600 dark:bg-teal-300/10 dark:text-teal-200">
                      Más elegido
                    </p>
                  ) : null}
                </div>
                <p className="mt-4 text-sm/6 text-gray-600 dark:text-gray-300">
                  {tier.description}
                </p>
                <ul
                  role="list"
                  className="mt-8 space-y-3 text-sm/6 text-gray-600 dark:text-gray-200"
                >
                  {tier.features.map((feature) => (
                    <li key={feature} className="flex gap-x-3">
                      <CheckIcon
                        aria-hidden="true"
                        className="h-6 w-5 flex-none text-teal-600 dark:text-teal-200"
                      />
                      {feature}
                    </li>
                  ))}
                </ul>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  )
}
