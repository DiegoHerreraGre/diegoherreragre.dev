import { Card } from '@/components/Card';
import { SimpleLayout } from '@/components/SimpleLayout';
import { getAllArticles } from '@/lib/articles';
import { formatDate } from '@/lib/formatDate';

function Article({ article }) {
    return (
        <article className='text-justify md:grid md:grid-cols-4 md:items-baseline'>
            <Card className='md:col-span-3'>
                <Card.Title href={`/articles/${article.slug}`}>{article.title}</Card.Title>
                <Card.Eyebrow
                    as='time'
                    dateTime={article.date}
                    className='md:hidden'
                    decorate>
                    {formatDate(article.date)}
                </Card.Eyebrow>
                <Card.Description>{article.description}</Card.Description>
                <Card.Cta>Leer artículo</Card.Cta>
            </Card>
            <Card.Eyebrow
                as='time'
                dateTime={article.date}
                className='hidden mt-1 md:block'>
                {formatDate(article.date)}
            </Card.Eyebrow>
        </article>
    );
}

export const metadata = {
    title: 'Artículos sobre Tecnología',
    description: 'Compartiendo mi pasión por la tecnología a través de artículos sobre desarrollo, innovación y el futuro digital.',
};

export const revalidate = 180;

export default async function ArticlesIndex() {
    let articles = await getAllArticles();
    return (
        <SimpleLayout
            title='Explorando el mundo tech: mi viaje en el desarrollo de software'
            intro='La tecnología es mi pasión y quiero compartir contigo mis experiencias, aprendizajes y descubrimientos en este fascinante mundo del desarrollo. Desde código hasta ideas innovadoras, aquí encontrarás mi perspectiva sobre el presente y futuro de la tecnología.'>
            <div className='md:border-l md:border-zinc-100 md:pl-6 md:dark:border-zinc-700/40'>
                <div className='flex flex-col space-y-16 max-w-3xl'>
                    {articles.map((article) => (
                        <Article
                            key={article.slug}
                            article={article}
                        />
                    ))}
                </div>
            </div>
        </SimpleLayout>
    );
}
