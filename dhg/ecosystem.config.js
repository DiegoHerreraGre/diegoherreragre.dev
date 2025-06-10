module.exports = {
  apps: [
    {
      name: 'dhg-web',
      cwd: '/home/dhg/domains/diegoherreragre.dev/dhg',
      script: 'npm',
      args: 'start',
      instances: 1,
      autorestart: true,
      watch: true,
      env: {
        NODE_ENV: 'production',
      },
      max_memory_restart: '128M',
    },
  ],
}
