# diegoherreragre.dev

Este repositorio contiene el código fuente del sitio web personal y blog alojado en https://diegoherreragre.dev.

## 🚀 Tecnologías principales

- Next.js 14+ (App Router)
- React 18+
- Node.js 22.x
- Prisma ORM (MySQL/MariaDB)
- Tailwind CSS
- PHP 8.x (para proyectos complementarios)

## 🗂 Estructura de directorios

```
.
├── dhg/
│   ├── app/             # Rutas App Router de Next.js
│   ├── components/      # Componentes React reutilizables
│   ├── config/          # Configuraciones
│   ├── images/          # Imágenes y assets
│   ├── lib/             # Librerías y utilidades internas
│   ├── middlewares/     # Middlewares personalizados
│   ├── prisma/          # Esquema y migraciones de Prisma
│   ├── public/          # Archivos estáticos públicos
│   ├── styles/          # Estilos globales (Tailwind CSS)
│   └── utils/           # Funciones utilitarias
│
├── .gitignore
└── README.md
```

## ⚙️ Instalación y desarrollo

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/DiegoHerreraGre/diegoherreragre.dev.git
   ```

2. Instalar dependencias:

   ```bash
   cd diegoherreragre.dev/dhg
   npm install
   ```

3. Crear archivo `.env.local` basado en un ejemplo o definiendo las variables necesarias:

   ```bash
   DATABASE_URL="mysql://user:password@host:port/nombre_base_datos"
   ```

4. Ejecutar migraciones de Prisma:

   ```bash
   npx prisma migrate dev
   ```

5. Levantar servidor de desarrollo:

   ```bash
   npm run dev
   ```

## 🧪 Scripts disponibles

- `npm run dev` - Inicia el servidor en modo desarrollo
- `npm run build` - Genera la versión de producción
- `npm start` - Inicia el servidor en producción
- `npm run lint` - Corre ESLint y formatea con Prettier
- `npm run db:generate` - Genera cliente de Prisma
- `npm run db:push` - Aplica cambios sin migraciones
- `npm run db:migrate` - Ejecuta migraciones
- `npm run db:studio` - Abre Prisma Studio

## 🔒 Seguridad

Para reportar vulnerabilidades o problemas de seguridad, consulta el archivo [SECURITY.md](SECURITY.md).

## 📄 Licencia

Este proyecto está bajo la licencia [MIT](LICENSE).
