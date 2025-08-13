module.exports = {
    apps: [
        {
            name: 'dhg-web',
            cwd: '/home/dhg/domains/diegoherreragre.dev/dhg',
            script: 'node_modules/next/dist/bin/next',
            exec_mode: 'fork',
            args: 'start -p 22110',
            instances: '1',
            autorestart: true,
            watch: false,
            max_memory_restart: '512M',
            env: {
                NODE_ENV: 'production',
            },
            cron_restart: '0 0 * * 1',
        },
    ],
};
