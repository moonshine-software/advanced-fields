# Stepper

```php
Stepper::make([
    Step::make([
        Heading::make('Step 1')
    ], 'Step 1', 'Some description 1'),

    Step::make([
        Heading::make('Step 2')
    ], 'Step 2', 'Some description 2')->icon('users'),

    Step::make(title: 'Step 3', description: 'Some description 3')
        ->async('/html', events: [
            AlpineJs::event(JsEvent::FRAGMENT_UPDATED, 'fragment-1')
        ])
        ->whenFinishEvents([
            AlpineJs::event(JsEvent::FRAGMENT_UPDATED, 'fragment-2')
        ])
    ,
], finishComponent: [
    Heading::make('Спасибо!')
], nextText: 'Следующий шаг', finishText: 'Завершить')->changeNextButton(function($btn, $index) {
    return $btn->badge($index);
}),

// Current step is second
Stepper::make([])->current(2),
// Finished
Stepper::make([])->finished(),
// Can`t change step
Stepper::make([])->lock(),
// Can`t change step after finished
Stepper::make([])->lockWhenFinish(),
```

# Async tabs

```php
AsyncTabs::make([
    AsyncTab::make('Tab 1', '/html'),
    AsyncTab::make('Tab 2', '/html'),
]),
```
