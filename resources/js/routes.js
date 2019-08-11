import Dashboard from './components/Dashboard'
import UiElements from './components/UiElements'


export default {
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            component: Dashboard,
            title: 'Dashboard',
            icon: 'fa fa-th-large'
        },
        {
            path: '/ui_elements',
            component: UiElements,
            title: 'UI Elements',
            icon: 'fa fa-user',
            children: [
                { path: '/ui_elements/1', title: 'UI Elements 1' },
                { path: '/ui_elements/2', title: 'UI Elements v2' },
                { path: '/ui_elements/3', title: 'UI Elements v3' }
            ]
        }
    ]
}