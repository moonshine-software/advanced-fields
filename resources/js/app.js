import tabs from './tabs.js'

document.addEventListener("moonshine:init", () => {
    MoonShine.onCallback('spaMenu', function(data, messageType, component) {
        const el = component.$el
        const menu = el.closest('.menu')
        const current = el.closest('li')
        menu.querySelectorAll('li').forEach((li) => {
            li.classList.remove('_is-active')
            li.querySelector('a').removeAttribute('data-stop-async')
        })
        current.classList.add('_is-active')
        el.setAttribute('data-stop-async', true)

        const url = new URL(el.href)
        url.searchParams.delete('_fragment-load')

        history.pushState({}, '', url.href)
    })

    MoonShine.onCallback('asyncTabs', function(data, messageType, component) {
        const el = component.$el
        const container = el.closest('.async-tabs-container')

        container.querySelectorAll('a').forEach((a) => {
            a.classList.remove('btn-primary')
            a.removeAttribute('data-stop-async')
        })

        el.classList.add('btn-primary')
        el.setAttribute('data-stop-async', true)
    })
})

window.Alpine.data('asyncTabs', tabs)
