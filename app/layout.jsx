import { Providers } from '@/app/providers';
import { Layout } from '@/components/Layout';
import { Ubuntu } from 'next/font/google';
import '@/styles/tailwind.css';
import { ReCaptchaProvider } from 'next-recaptcha-v3';
import { PersonStructuredData, WebsiteStructuredData } from '@/components/StructuredData';
import { GoogleAnalytics } from '@next/third-parties/google';

const ubuntu = Ubuntu({
    subsets: ['latin'],
    display: 'swap',
    weight: ['300', '400', '700'],
    preload: true,
});

export const metadata = {
    title: {
        template: '%s | Diego Herrera Gre - Desarrollador Full Stack',
        default: 'Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web | Experto en React, Next.js, Node.js',
    },
    description:
        '🚀 Desarrollador Full Stack especializado en React, Next.js, Node.js y MongoDB. Creando experiencias web innovadoras y escalables. ✨ Portafolio profesional con +5 años de experiencia en desarrollo web moderno.',
    keywords: [
        'desarrollador web Madrid',
        'full stack developer',
        'React developer',
        'Next.js especialista',
        'frontend backend',
        'javascript typescript',
        'Node.js MongoDB',
        'desarrollador freelance',
        'programador web',
        'diseño web responsive',
        'aplicaciones web',
        'desarrollo software',
    ],
    authors: [
        {
            name: 'Diego Herrera Gre',
            url: 'https://diegoherreragre.dev',
        },
    ],
    creator: 'Diego Herrera Gre',
    publisher: 'Diego Herrera Gre',
    formatDetection: {
        email: false,
        address: false,
        telephone: false,
    },
    metadataBase: new URL('https://diegoherreragre.dev'),
    openGraph: {
        type: 'website',
        locale: 'es_ES',
        url: process.env.NEXT_PUBLIC_SITE_URL,
        title: 'Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web | Experto en React, Next.js',
        description:
            '🚀 Desarrollador Full Stack con experiencia en React, Next.js, Node.js y MongoDB. Creando soluciones web innovadoras y escalables. Portafolio profesional con proyectos destacados.',
        siteName: 'Portafolio de Diego Herrera Gre - Desarrollador Full Stack',
        images: [
            {
                url: '/og_image.webp',
                width: 1200,
                height: 630,
                alt: 'Diego Herrera Gre - Desarrollador Full Stack',
            },
        ],
    },
    twitter: {
        card: 'summary_large_image',
        title: 'Diego Herrera Gre - Desarrollador Full Stack | React, Next.js Expert',
        description: '🚀 Desarrollador Full Stack especializado en React, Next.js y tecnologías web modernas. Creando experiencias digitales innovadoras.',
        creator: '@diegoherreragre',
        images: ['/og_twitter.webp'],
    },
    robots: {
        index: true,
        follow: true,
        nocache: false,
        googleBot: {
            'index': true,
            'follow': true,
            'noimageindex': false,
            'max-video-preview': -1,
            'max-image-preview': 'large',
            'max-snippet': -1,
        },
    },
    alternates: {
        canonical: process.env.NEXT_PUBLIC_SITE_URL,
        types: {
            'application/rss+xml': `${process.env.NEXT_PUBLIC_SITE_URL}/api/feed.xml`,
        },
    },
    other: {
        'msapplication-TileColor': '#000000',
        'theme-color': '#000000',
    },
};

export default function RootLayout({ children }) {
    return (
        <html
            lang='es'
            className={`h-full antialiased ${ubuntu.className}`}
            suppressHydrationWarning>
            <head>
                <meta charSet='utf-8' />
                <meta
                    httpEquiv='X-UA-Compatible'
                    content='IE=edge'
                />
                <meta
                    name='viewport'
                    content='width=device-width, initial-scale=1.0'
                />
                <meta
                    name='format-detection'
                    content='telephone=no'
                />
                <meta
                    name='robots'
                    content='index, follow'
                />
                <meta
                    name='googlebot'
                    content='index, follow'
                />
                <meta
                    name='revisit-after'
                    content='7 days'
                />
                <meta
                    name='author'
                    content='Diego Herrera Gre'
                />
                <meta
                    name='copyright'
                    content='Diego Herrera Gre'
                />
                <link
                    rel='apple-touch-icon'
                    sizes='180x180'
                    href='/icons/apple-touch-icon.png'
                />
                <meta
                    name='apple-mobile-web-app-capable'
                    content='yes'
                />
                <meta
                    name='apple-mobile-web-app-status-bar-style'
                    content='black-translucent'
                />
                {/* Open Graph / Facebook */}
                <meta
                    property='og:type'
                    content='website'
                />
                <meta
                    property='og:url'
                    content={process.env.NEXT_PUBLIC_SITE_URL}
                />
                <meta
                    property='og:title'
                    content='Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web | Experto en React, Next.js'
                />
                <meta
                    property='og:description'
                    content='Desarrollador Full Stack con experiencia en React, Next.js, Node.js y MongoDB. Creando soluciones web innovadoras y escalables. Portafolio profesional con proyectos destacados en desarrollo web moderno.'
                />
                <meta
                    property='og:image'
                    content={`${process.env.NEXT_PUBLIC_SITE_URL}/og_image.webp`}
                />
                <meta
                    property='og:image:width'
                    content='1200'
                />
                <meta
                    property='og:image:height'
                    content='630'
                />
                <meta
                    property='og:image:alt'
                    content='Diego Herrera Gre - Desarrollador Full Stack'
                />

                {/* Twitter */}
                <meta
                    name='twitter:card'
                    content='summary_large_image'
                />
                <meta
                    name='twitter:url'
                    content={process.env.NEXT_PUBLIC_SITE_URL}
                />
                <meta
                    name='twitter:creator'
                    content='@diegoherreragre'
                />
                <meta
                    name='twitter:title'
                    content='Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web | Experto en React, Next.js'
                />
                <meta
                    name='twitter:description'
                    content='Desarrollador Full Stack con experiencia en React, Next.js, Node.js y MongoDB. Creando soluciones web innovadoras y escalables. Portafolio profesional con proyectos destacados en desarrollo web moderno.'
                />
                <meta
                    name='twitter:image'
                    content={`${process.env.NEXT_PUBLIC_SITE_URL}/og_twitter.webp`}
                />
                <meta
                    name='twitter:image:alt'
                    content='Diego Herrera Gre - Desarrollador Full Stack'
                />

                {/* LinkedIn */}
                <meta
                    property='og:site_name'
                    content='Portafolio de Diego Herrera Gre - Desarrollador Full Stack'
                />
                <meta
                    property='og:locale'
                    content='es_ES'
                />
                <meta
                    property='og:locale:alternate'
                    content='en_US'
                />
                <meta
                    property='article:author'
                    content='https://linkedin.com/in/diego-f-herrera-gre/'
                />

                {/* Favicon y PWA */}
                <link
                    rel='canonical'
                    href={process.env.NEXT_PUBLIC_SITE_URL}
                />
                <link
                    rel='icon'
                    href='/favicon.ico'
                />
                <link
                    rel='icon'
                    type='image/png'
                    sizes='32x32'
                    href='/favicon-32x32.png'
                />
                <link
                    rel='icon'
                    type='image/png'
                    sizes='16x16'
                    href='/favicon-16x16.png'
                />
                <link
                    rel='apple-touch-icon'
                    href='/apple-touch-icon.png'
                />
                <link
                    rel='manifest'
                    href='/manifest.json'
                />
                <meta
                    name='theme-color'
                    content='#000000'
                />
                <meta
                    name='msapplication-TileColor'
                    content='#000000'
                />
                <meta
                    name='msapplication-TileImage'
                    content='/favicon.ico'
                />
                <meta
                    name='msapplication-config'
                    content='/browserconfig.xml'
                />

                {/* Metadatos adicionales para SEO */}
                <meta
                    name='keywords'
                    content='desarrollador web, full stack, frontend, backend, react, next.js, javascript, typescript, mongodb, node.js, express, diseño web, desarrollo web, programador, aplicaciones web, SEO, optimización web'
                />
                <meta
                    name='geo.region'
                    content='ES'
                />
                <meta
                    name='geo.position'
                    content='40.4168;-3.7038'
                />
                <meta
                    name='ICBM'
                    content='40.4168, -3.7038'
                />
                <meta
                    name='distribution'
                    content='global'
                />
                <meta
                    name='rating'
                    content='general'
                />
                <link
                    rel='manifest'
                    href='/manifest.json'
                />
                <meta
                    name='theme-color'
                    content='#000000'
                />
                <title>Diego Herrera Gré</title>
                <GoogleAnalytics gaId='G-SSWJP6CNT1' />
                <PersonStructuredData />
                <WebsiteStructuredData />
            </head>
            <body className='flex h-full bg-zinc-50 dark:bg-black'>
                <Providers>
                    <div className='flex w-full'>
                        <Layout>
                            <ReCaptchaProvider reCaptchaKey={process.env.RECAPTCHA_PUBLIC_KEY}>{children}</ReCaptchaProvider>
                        </Layout>
                    </div>
                </Providers>
            </body>
        </html>
    );
}
