import Dashboard from './pages/Dashboard';
import UiElements from './pages/UiElements';
import Calendar from './pages/Calendar';
import DateTimePicker from './pages/DateTimePicker';
import Components from './pages/Components';


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
        },
        {
            path: '/components',
            redirect: '/components/calendar',
            component: Components,
            title: 'Components',
            icon: 'fas fa-cubes',
            children: [
                {
                    path: '/components/calendar',
                    title: 'Calendar',
                    component: Calendar
                },
                {
                    path: '/components/date-time-picker',
                    title: 'Date/Time Picker',
                    component: DateTimePicker
                }
            ]
        }
    ]
}