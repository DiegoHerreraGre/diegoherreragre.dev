module.exports = {
    apps: [
        {
            name: 'dhg-web',
            cwd: '/home/dhg/domains/diegoherreragre.dev/dhg',
            script: 'node_modules/next/dist/bin/next',
            exec_mode: 'fork',
            args: 'start -p 22110',
            instances: 1,
            autorestart: true,
            watch: false,
            env: {
                NODE_ENV: 'production',
            },
            max_memory_restart: '256M',
        },
    ],
};
