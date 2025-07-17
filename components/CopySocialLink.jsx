'use client'

import clsx from 'clsx'
import { useState } from 'react'
import { DiscordIcon } from '@/components/SocialIcons'

export default function CopySocialLink({ className, copyText, children }) {
  const [copied, setCopied] = useState(false)
  return (
    <li className={clsx(className, 'flex')}>
      <button
        type="button"
        onClick={() => {
          navigator.clipboard.writeText(copyText)
          setCopied(true)
        }}
        className="group flex text-sm font-medium text-[#71717B] transition hover:text-teal-500 dark:text-zinc-100 dark:hover:text-teal-500"
      >
        <DiscordIcon className="h-6 w-6 flex-none fill-[#71717B] transition group-hover:fill-teal-500 dark:fill-zinc-100 dark:group-hover:fill-teal-500" />
        <span className="ml-4">{copied ? '¡Copiado!' : children}</span>
      </button>
    </li>
  )
}
