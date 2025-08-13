import { getAllArticles } from "@/lib/articles";

export default async function sitemap() {
  const baseUrl = "https://diegoherreragre.dev";

  // Obtener artículos dinámicamente
  const articles = await getAllArticles();

  // URLs estáticas con configuración optimizada
  const staticUrls = [
    {
      url: baseUrl,
      lastModified: new Date(),
      changeFrequency: "weekly", // Cambiado de yearly a weekly
      priority: 1,
    },
    {
      url: `${baseUrl}/about`,
      lastModified: new Date(),
      changeFrequency: "monthly",
      priority: 0.8, // Aumentado de 0.6 a 0.8
    },
    {
      url: `${baseUrl}/projects`,
      lastModified: new Date(),
      changeFrequency: "monthly",
      priority: 0.9, // Aumentado de 0.8 a 0.9
    },
    {
      url: `${baseUrl}/articles`,
      lastModified: new Date(),
      changeFrequency: "weekly", // Cambiado de monthly a weekly
      priority: 0.7, // Aumentado de 0.4 a 0.7
    },
    {
      url: `${baseUrl}/stack`,
      lastModified: new Date(),
      changeFrequency: "monthly", // Cambiado de yearly a monthly
      priority: 0.5, // Aumentado de 0.4 a 0.5
    },
    {
      url: `${baseUrl}/thank-you`,
      lastModified: new Date(),
      changeFrequency: "yearly",
      priority: 0.2,
    },
  ];

  // URLs dinámicas de artículos
  const articleUrls = articles.map((article) => ({
    url: `${baseUrl}/articles/${article.slug}`,
    lastModified: new Date(article.date),
    changeFrequency: "monthly",
    priority: 0.6,
  }));

  return [...staticUrls, ...articleUrls];
}
