import { Providers } from '@/app/providers'
import { Layout } from '@/components/Layout'
import { Ubuntu } from 'next/font/google'
import '@/styles/tailwind.css'
import envs from '@/config/envs.config'
import { ReCaptchaProvider } from 'next-recaptcha-v3'
import Script from 'next/script'

let { NEXT_PUBLIC_SITE_URL } = envs

const googleAnalytics = `
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SSWJP6CNT1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-SSWJP6CNT1');
</script>
`

const ubuntu = Ubuntu({
  subsets: ['latin'],
  display: 'swap',
  weight: ['300', '400', '700'],
})

export const metadata = {
  title: {
    template: 'Diego Herrera Gre',
    default: 'Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web',
  },
  description:
    'Desarrollador Full Stack apasionado por crear experiencias web únicas y funcionales. Especializado en React, Next.js y tecnologías modernas de desarrollo web. Transformando ideas en soluciones digitales innovadoras.',
  keywords: [
    'desarrollador web',
    'full stack',
    'frontend',
    'backend',
    'react',
    'next.js',
    'javascript',
    'typescript',
    'web developer',
    'mongodb',
    'node.js',
    'express',
    'portafolio',
  ],
  authors: [
    {
      name: 'Diego Herrera Gre',
      url: 'https://www.diegoherreragre.dev',
    },
  ],
  creator: 'Diego Herrera Gre',
  openGraph: {
    type: 'website',
    locale: 'es_ES',
    url: NEXT_PUBLIC_SITE_URL,
    title: 'Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web',
    description:
      'Portafolio profesional con proyectos y experiencia en desarrollo web',
    siteName: 'Portafolio de Diego Herrera Gre',
  },
  alternates: {
    types: {
      'application/rss+xml': `${NEXT_PUBLIC_SITE_URL}/api/feed.xml`,
    },
  },
}

export default function RootLayout({ children }) {
  return (
    <html
      lang="es"
      className={`h-full antialiased ${ubuntu.className}`}
      suppressHydrationWarning
    >
      <head>
        <title>Diego Herrera Gré</title>
        <meta charSet="utf-8" />
        <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="revisit-after" content="7 days" />
        <meta name="author" content="Diego Herrera Gre" />
        <meta name="copyright" content="Diego Herrera Gre" />

        {/* Open Graph / Facebook */}
        <meta property="og:type" content="website" />
        <meta property="og:url" content={NEXT_PUBLIC_SITE_URL} />
        <meta
          property="og:title"
          content="Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web | Experto en React, Next.js"
        />
        <meta
          property="og:description"
          content="Desarrollador Full Stack con experiencia en React, Next.js, Node.js y MongoDB. Creando soluciones web innovadoras y escalables. Portafolio profesional con proyectos destacados en desarrollo web moderno."
        />
        <meta
          property="og:image"
          content={`${NEXT_PUBLIC_SITE_URL}/og_image.webp`}
        />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta
          property="og:image:alt"
          content="Diego Herrera Gre - Desarrollador Full Stack"
        />

        {/* Twitter */}
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:url" content={NEXT_PUBLIC_SITE_URL} />
        <meta name="twitter:creator" content="@diegoherreragre" />
        <meta
          name="twitter:title"
          content="Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web | Experto en React, Next.js"
        />
        <meta
          name="twitter:description"
          content="Desarrollador Full Stack con experiencia en React, Next.js, Node.js y MongoDB. Creando soluciones web innovadoras y escalables. Portafolio profesional con proyectos destacados en desarrollo web moderno."
        />
        <meta
          name="twitter:image"
          content={`${NEXT_PUBLIC_SITE_URL}/og_twitter.webp`}
        />
        <meta
          name="twitter:image:alt"
          content="Diego Herrera Gre - Desarrollador Full Stack"
        />

        {/* LinkedIn */}
        <meta
          property="og:site_name"
          content="Portafolio de Diego Herrera Gre - Desarrollador Full Stack"
        />
        <meta property="og:locale" content="es_ES" />
        <meta property="og:locale:alternate" content="en_US" />
        <meta
          property="article:author"
          content="https://linkedin.com/in/diego-f-herrera-gre/"
        />

        {/* Favicon y PWA */}
        <link rel="canonical" href={NEXT_PUBLIC_SITE_URL} />
        <link rel="icon" href="/favicon.ico" />
        <link
          rel="icon"
          type="image/png"
          sizes="32x32"
          href="/favicon-32x32.png"
        />
        <link
          rel="icon"
          type="image/png"
          sizes="16x16"
          href="/favicon-16x16.png"
        />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
        <link rel="manifest" href="/manifest.json" />
        <meta name="theme-color" content="#000000" />
        <meta name="msapplication-TileColor" content="#000000" />
        <meta name="msapplication-TileImage" content="/favicon.ico" />
        <meta name="msapplication-config" content="/browserconfig.xml" />

        {/* Metadatos adicionales para SEO */}
        <meta
          name="keywords"
          content="desarrollador web, full stack, frontend, backend, react, next.js, javascript, typescript, mongodb, node.js, express, diseño web, desarrollo web, programador, aplicaciones web, SEO, optimización web"
        />
        <meta name="geo.region" content="ES" />
        <meta name="geo.position" content="40.4168;-3.7038" />
        <meta name="ICBM" content="40.4168, -3.7038" />
        <meta name="distribution" content="global" />
        <meta name="rating" content="general" />
        <Script id="google-analytics" strategy="afterInteractive">
          {googleAnalytics}
        </Script>
      </head>
      <body className="flex h-full bg-zinc-50 dark:bg-black">
        <Providers>
          <div className="flex w-full">
            <Layout>
              <ReCaptchaProvider reCaptchaKey={envs.RECAPTCHA_PUBLIC_KEY}>
                {children}
              </ReCaptchaProvider>
            </Layout>
          </div>
        </Providers>
      </body>
    </html>
  )
}
