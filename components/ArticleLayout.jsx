import { ArticleLayoutClient } from '@/components/ArticleLayoutClient'

// Server Component wrapper para uso seguro en MDX
export function ArticleLayout({ article, children }) {
  return <ArticleLayoutClient article={article}>{children}</ArticleLayoutClient>
}
