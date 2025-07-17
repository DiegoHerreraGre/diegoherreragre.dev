export default function robots() {
  return {
    rules: {
      userAgent: '*',
      allow: '/',
      disallow: [],
    },
    sitemap: 'https://www.diegoherreragre.dev/sitemap.xml',
  }
}
