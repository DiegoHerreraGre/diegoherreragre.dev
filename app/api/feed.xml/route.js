import { Feed } from 'feed';
import { getAllArticles } from '@/lib/articles';
import PermisionMiddleware from '@/middlewares/permisions.middlewares';

export async function GET() {
    const siteUrl = 'https://www.diegoherreragre.dev';

    const feed = new Feed({
        title: 'Diego Herrera Gre - Blog de Desarrollo Web',
        description: 'Artículos sobre desarrollo web, React, Next.js, Node.js y tecnologías modernas',
        id: siteUrl,
        link: siteUrl,
        language: 'es',
        image: `${siteUrl}/og_image.webp`,
        favicon: `${siteUrl}/favicon.ico`,
        copyright: `Todos los derechos reservados ${new Date().getFullYear()}, Diego Herrera Gre`,
        updated: new Date(),
        generator: 'Next.js usando Feed for Node.js',
        feedLinks: {
            rss2: `${siteUrl}/api/feed.xml`,
            json: `${siteUrl}/api/feed.json`,
            atom: `${siteUrl}/api/feed.atom`,
        },
        author: {
            name: 'Diego Herrera Gre',
            email: 'contacto@diegoherreragre.dev',
            link: siteUrl,
        },
    });

    try {
        const articles = await getAllArticles();

        articles.forEach((article) => {
            const articleUrl = `${siteUrl}/articles/${article.slug}`;

            feed.addItem({
                title: article.title,
                id: articleUrl,
                link: articleUrl,
                description: article.description,
                content: article.content || article.description,
                author: [
                    {
                        name: 'Diego Herrera Gre',
                        email: 'contacto@diegoherreragre.dev',
                        link: siteUrl,
                    },
                ],
                date: new Date(article.date),
                image: article.image || `${siteUrl}/og_image.webp`,
                category: [
                    {
                        name: 'Desarrollo Web',
                        domain: `${siteUrl}/articles`,
                    },
                ],
            });
        });

        return new Response(feed.rss2(), {
            headers: {
                'Content-Type': 'application/rss+xml; charset=utf-8',
                'Cache-Control': 'public, s-maxage=86400, stale-while-revalidate',
            },
        });
    } catch (error) {
        console.error('Error generando RSS feed:', error);

        return new Response('Error generando el feed RSS', {
            status: 500,
            headers: {
                'Content-Type': 'text/plain',
            },
        });
    }
}

export async function POST(request) {
    return await PermisionMiddleware(request);
}

export async function PUT(request) {
    return await PermisionMiddleware(request);
}

export async function DELETE(request) {
    return await PermisionMiddleware(request);
}

export async function PATCH(request) {
    return await PermisionMiddleware(request);
}

export async function OPTIONS(request) {
    return await PermisionMiddleware(request);
}

export async function HEAD() {
    return new Response(null, {
        headers: {
            'Content-Type': 'application/rss+xml; charset=utf-8',
            'Cache-Control': 'public, s-maxage=86400, stale-while-revalidate',
        },
    });
}
