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
            icon: 'fa fa-user'
        }
    ]
}