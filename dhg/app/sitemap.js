export default function sitemap() {
  return [
    {
      url: 'https://www.diegoherreragre.dev',
      lastModified: new Date(),
      changeFrecuency: 'yearly',
      priority: 1,
    },
    {
      url: 'https://www.diegoherreragre.dev/projects',
      lastModified: new Date(),
      changeFrecuency: 'monthly',
      priority: 0.8,
    },
    {
      url: 'https://www.diegoherreragre.dev/articles',
      lastModified: new Date(),
      changeFrecuency: 'monthly',
      priority: 0.4,
    },
    {
      url: 'https://www.diegoherreragre.dev/thank-you',
      lastModified: new Date(),
      changeFrecuency: 'yearly',
      priority: 0.2,
    },
    {
      url: 'https://www.diegoherreragre.dev/about',
      lastModified: new Date(),
      changeFrecuency: 'monthly',
      priority: 0.6,
    },
    {
      url: 'https://www.diegoherreragre.dev/stack',
      lastModified: new Date(),
      changeFrecuency: 'yearly',
      priority: 0.4,
    },
  ]
}
