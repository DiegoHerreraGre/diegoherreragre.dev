import { Providers } from "@/app/providers";
import { Layout } from "@/components/Layout";
import { Ubuntu } from "next/font/google";
import "@/styles/tailwind.css";
import envs from "@/config/envs.config";
import { ReCaptchaProvider } from "next-recaptcha-v3";
import Script from "next/script";

let { NEXT_PUBLIC_SITE_URL } = envs;

const googleAnalytics = `
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SSWJP6CNT1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-SSWJP6CNT1');
</script>
`;

const ubuntu = Ubuntu({
  subsets: ["latin"],
  display: "swap",
  weight: ["300", "400", "700"],
});

export const metadata = {
  title: {
    template: "Diego Herrera Gre",
    default: "Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web",
  },
  description:
    "Desarrollador Full Stack apasionado por crear experiencias web únicas y funcionales. Especializado en React, Next.js y tecnologías modernas de desarrollo web. Transformando ideas en soluciones digitales innovadoras.",
  keywords: [
    "desarrollador web",
    "full stack",
    "frontend",
    "backend",
    "react",
    "next.js",
    "javascript",
    "typescript",
    "web developer",
    "mongodb",
    "node.js",
    "express",
    "portafolio",
  ],
  authors: [
    {
      name: "Diego Herrera Gre",
      url: "https://www.diegoherreragre.dev",
    },
  ],
  creator: "Diego Herrera Gre",
  openGraph: {
    type: "website",
    locale: "es_ES",
    url: NEXT_PUBLIC_SITE_URL,
    title: "Diego Herrera Gre - Desarrollador Full Stack & Diseñador Web",
    description:
      "Portafolio profesional con proyectos y experiencia en desarrollo web",
    siteName: "Portafolio de Diego Herrera Gre",
  },
  alternates: {
    types: {
      "application/rss+xml": `${NEXT_PUBLIC_SITE_URL}/api/feed.xml`,
    },
  },
};

export default function RootLayout({ children }) {
  return (
    <html
      lang="es"
      className={`h-full antialiased ${ubuntu.className}`}
      suppressHydrationWarning
    >
      <head>
        <title>Diego Herrera Gré</title>
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
  );
}
