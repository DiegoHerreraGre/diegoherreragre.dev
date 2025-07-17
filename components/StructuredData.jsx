export function PersonStructuredData() {
    const structuredData = {
        '@context': 'https://schema.org',
        '@type': 'Person',
        'name': 'Diego Herrera Gre',
        'jobTitle': 'Desarrollador Full Stack',
        'description': 'Desarrollador Full Stack especializado en React, Next.js, Node.js y tecnologías web modernas',
        'url': 'https://diegoherreragre.dev',
        'sameAs': ['https://linkedin.com/in/diego-f-herrera-gre/', 'https://github.com/DiegoHerreraGre'],
        'image': 'https://diegoherreragre.dev/og_image.webp',
        'address': {
            '@type': '755000',
            'addressCountry': 'CL',
            'addressRegion': 'Santiago',
        },
        'knowsAbout': [
            'JavaScript',
            'React',
            'Next.js',
            'Node.js',
            'MongoDB',
            'Full Stack Development',
            'Web Development',
            'Frontend Development',
            'Backend Development',
        ],
        'alumniOf': {
            '@type': 'Organization',
            'name': 'Universidad Alberto Hurtado',
        },
        'worksFor': {
            '@type': 'Organization',
            'name': 'MTM Diseño y Publicidad',
        },
    };

    return (
        <script
            type='application/ld+json'
            dangerouslySetInnerHTML={{
                __html: JSON.stringify(structuredData),
            }}
        />
    );
}

export function WebsiteStructuredData() {
    const structuredData = {
        '@context': 'https://schema.org',
        '@type': 'WebSite',
        'name': 'Diego Herrera Gre - Portafolio Profesional',
        'description': 'Portafolio profesional de Diego Herrera Gre, desarrollador Full Stack especializado en tecnologías web modernas',
        'url': 'https://diegoherreragre.dev',
        'creator': {
            '@type': 'Person',
            'name': 'Diego Herrera Gre',
        },
        'mainEntity': {
            '@type': 'Person',
            'name': 'Diego Herrera Gre',
        },
        'potentialAction': {
            '@type': 'SearchAction',
            'target': 'https://diegoherreragre.dev/search?q={search_term_string}',
            'query-input': 'required name=search_term_string',
        },
    };

    return (
        <script
            type='application/ld+json'
            dangerouslySetInnerHTML={{
                __html: JSON.stringify(structuredData),
            }}
        />
    );
}

export function BreadcrumbStructuredData({ items }) {
    const structuredData = {
        '@context': 'https://schema.org',
        '@type': 'BreadcrumbList',
        'itemListElement': items.map((item, index) => ({
            '@type': 'ListItem',
            'position': index + 1,
            'name': item.name,
            'item': item.url,
        })),
    };

    return (
        <script
            type='application/ld+json'
            dangerouslySetInnerHTML={{
                __html: JSON.stringify(structuredData),
            }}
        />
    );
}

export function ArticleStructuredData({ article }) {
    const structuredData = {
        '@context': 'https://schema.org',
        '@type': 'Article',
        'headline': article.title,
        'description': article.description,
        'image': article.image || 'https://diegoherreragre.dev/og_image.webp',
        'author': {
            '@type': 'Person',
            'name': 'Diego Herrera Gre',
            'url': 'https://diegoherreragre.dev',
        },
        'publisher': {
            '@type': 'Person',
            'name': 'Diego Herrera Gre',
            'url': 'https://diegoherreragre.dev',
        },
        'datePublished': article.date,
        'dateModified': article.lastModified || article.date,
        'mainEntityOfPage': {
            '@type': 'WebPage',
            '@id': `https://diegoherreragre.dev/articles/${article.slug}`,
        },
    };

    return (
        <script
            type='application/ld+json'
            dangerouslySetInnerHTML={{
                __html: JSON.stringify(structuredData),
            }}
        />
    );
}
