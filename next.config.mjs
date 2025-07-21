import nextMDX from '@next/mdx';
import remarkGfm from 'remark-gfm';
import rehypeHighlight from 'rehype-highlight';

const nextConfig = {
    env: {
        SMTP_HOST: process.env.SMTP_HOST,
        SMTP_PORT: process.env.SMTP_PORT,
        SMTP_USER: process.env.SMTP_USER,
        SMTP_PASSWORD: process.env.SMTP_PASSWORD,
        SMTP_MAIL: process.env.SMTP_MAIL,
        DATABASE_URL: process.env.DATABASE_URL,
        NEXT_PUBLIC_SITE_URL: process.env.NEXT_PUBLIC_SITE_URL,
        RECAPTCHA_PUBLIC_KEY: process.env.RECAPTCHA_PUBLIC_KEY,
        RECAPTCHA_SECRET_KEY: process.env.RECAPTCHA_SECRET_KEY,
        HSTS_MAX_AGE: process.env.HSTS_MAX_AGE,
        HSTS_INCLUDE_SUBDOMAINS: process.env.HSTS_INCLUDE_SUBDOMAINS,
        HSTS_PRELOAD: process.env.HSTS_PRELOAD,
        HSTS_PRELOAD_POLICY: process.env.HSTS_PRELOAD_POLICY,
        GITHUB_SECRET: process.env.GITHUB_SECRET,
    },
    pageExtensions: ['js', 'jsx', 'ts', 'tsx', 'mdx'],
    images: {
        remotePatterns: [
            {
                protocol: 'https',
                hostname: 'cdn.simpleicons.org',
                port: '',
                pathname: '/**',
            },
        ],
        formats: ['image/avif', 'image/webp'],
    },
};

const withMDX = nextMDX({
    extension: /\.mdx?$/,
    options: {
        remarkPlugins: [remarkGfm],
        rehypePlugins: [rehypeHighlight],
    },
});

export default withMDX(nextConfig);
