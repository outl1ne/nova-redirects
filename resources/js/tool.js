Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'NovaRedirects',
            path: '/NovaRedirects',
            component: require('./components/Tool'),
        },
    ])
})
