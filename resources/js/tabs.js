export default () => ({
    init() {
        const t = this
        this.$nextTick(() => {
            t.$root.querySelector('.async-tabs-container a').click()
        })
    },
})
