export default function Head() {
  return (
    <>
      <meta charSet="utf-8" />
      <meta httpEquiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="format-detection" content="telephone=no" />
      <meta name="robots" content="index, follow" />
      <meta name="googlebot" content="index, follow" />
      <meta name="revisit-after" content="7 days" />
      <meta name="author" content="Diego Herrera Gre" />
      <meta name="copyright" content="Diego Herrera Gre" />
      <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="/icons/apple-touch-icon.png"
      />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta
        name="apple-mobile-web-app-status-bar-style"
        content="black-translucent"
      />
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
      <link rel="manifest" href="/manifest.json" />
      <meta name="theme-color" content="#000000" />
    </>
  );
}
