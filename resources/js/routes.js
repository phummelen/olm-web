import VueRouter from 'vue-router'
import store from './store'

// Middleware
import auth from './middleware/auth'
import admin from './middleware/admin'
import can_bbox from './middleware/can_bbox';
import can_verify_boxes from './middleware/can_verify_boxes'

import middlewarePipeline from './middleware/middlewarePipeline'

import Welcome from 'views/home/Welcome.vue';
import Email from 'views/Auth/passwords/Email.vue';
import Reset from 'views/Auth/passwords/Reset.vue';
import About from 'views/home/About.vue';
import Cleanups from 'views/home/Cleanups.vue';
import Littercoin from 'views/home/Littercoin.vue';
import Merchants from 'views/home/Merchants.vue';
import Donate from 'views/home/Donate.vue';
import ContactUs from 'views/home/ContactUs.vue';
import Index from 'views/home/Community/Index.vue';
import FAQ from 'views/home/FAQ.vue';
import GlobalMapContainer from 'views/global/GlobalMapContainer.vue';
import TagsViewer from 'views/home/TagsViewer.vue';
import SignUp from 'views/Auth/SignUp.vue';
import Subscribe from 'views/Auth/Subscribe.vue';
import Terms from 'views/general/Terms.vue';
import Privacy from 'views/general/Privacy.vue';
import References from 'views/general/References.vue';
import Leaderboard from 'views/Leaderboard/Leaderboard.vue';
import Credits from 'views/general/Credits.vue';
import Countries from 'views/Locations/Countries.vue';
import States from 'views/Locations/States.vue';
import Cities from 'views/Locations/Cities.vue';
import CityMapContainer from 'views/Locations/CityMapContainer.vue';
import VerifyPhotos from 'views/admin/VerifyPhotos.vue';
import AdminMerchants from 'views/admin/Merchants.vue';
import Upload from 'views/general/Upload.vue';
import Tag from 'views/general/Tag.vue';
import BulkTag from 'views/general/BulkTag.vue';
import Profile from 'views/general/Profile.vue';
import Teams from 'views/Teams/Teams.vue';
import Settings from 'views/Settings.vue';
import Details from 'views/settings/Details.vue';
import Social from 'views/settings/Social.vue';
import Account from 'views/settings/Account.vue';
import Payments from 'views/settings/Payments.vue';
import SettingsPrivacy from 'views/settings/Privacy.vue';
import SettingsLittercoin from 'views/settings/Littercoin.vue';
import PickedUp from 'views/settings/PickedUp.vue';
import Emails from 'views/settings/Emails.vue';
import GlobalFlag from 'views/settings/GlobalFlag.vue';
import BoundingBox from 'views/bbox/BoundingBox.vue';

// The earlier a route is defined, the higher its priority.
const router = new VueRouter({
    mode: 'history',
    // base: process.env.BASE_URL, // not sure if we need this?
    linkActiveClass: 'is-active',
    routes: [
        // GUEST ROUTES
        {
            path: '/',
            component: Welcome
        },
        {
            path: '/confirm/email/:token',
            component: Welcome
        },
        {
            path: '/password/reset',
            component: Email
        },
        {
            path: '/password/reset/:token',
            component: Reset,
            props: true
        },
        {
            path: '/emails/unsubscribe/:token',
            component: Welcome
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/cleanups',
            component: Cleanups,
            children: [
                {
                    path: ':invite_link/join',
                    component: Cleanups
                }
            ]
        },
        {
            path: '/littercoin',
            component: Littercoin
        },
        {
            path: '/littercoin/merchants',
            component: Merchants
        },
        {
            path: '/donate',
            component: Donate
        },
        {
            path: '/contact-us',
            component: ContactUs
        },
        {
            path: '/community',
            component: Index
        },
        {
            path: '/faq',
            component: FAQ
        },
        {
            path: '/global',
            component: GlobalMapContainer
        },
        {
            path: '/tags',
            component: TagsViewer
        },
        {
            path: '/signup',
            component: SignUp
        },
        {
            path: '/join/:plan?',
            component: Subscribe
        },
        {
            path: '/terms',
            component: Terms
        },
        {
            path: '/privacy',
            component: Privacy
        },
        {
            path: '/references',
            component: References
        },
        {
            path: '/leaderboard',
            component: Leaderboard
        },
        {
            path: '/credits',
            component: Credits
        },
        // Countries
        {
            path: '/world',
            component: Countries
        },
        // States
        {
            path: '/world/:country',
            component: States
        },
        // Cities
        {
            path: '/world/:country/:state',
            component: Cities
        },
        // City - Map
        {
            path: '/world/:country/:state/:city/map/:minDate?/:maxDate?/:hex?',
            component: CityMapContainer
        },
        // Admin
        {
            path: '/admin/photos',
            component: VerifyPhotos,
            meta: {
                middleware: [ auth, admin ]
            }
        },
        {
            path: '/admin/merchants',
            component: AdminMerchants,
            meta: {
                middleware: [ auth, admin ]
            }
        },
        // AUTH ROUTES
        {
            path: '/upload',
            component: Upload,
            meta: {
                middleware: [ auth ]
            }
        },
        {
            path: '/submit', // old route
            component: Upload,
            meta: {
                middleware: [ auth ]
            }
        },
        {
            path: '/tag',
            component: Tag,
            meta: {
                middleware: [ auth ]
            }
        },
        {
            path: '/bulk-tag',
            component: BulkTag,
            meta: {
                middleware: [ auth ]
            }
        },
        {
            path: '/profile',
            component: Profile,
            meta: {
                middleware: [ auth ]
            }
        },
        {
            path: '/teams',
            component: Teams,
            meta: {
                middleware: [ auth ]
            }
        },
        {
            path: '/settings',
            component: Settings,
            meta: {
                middleware: [ auth ]
            },
            children: [
                {
                    path: 'password',
                    component: Settings,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'details',
                    component: Details,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'social',
                    component: Social,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'account',
                    component: Account,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'payments',
                    component: Payments,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'privacy',
                    component: SettingsPrivacy,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'littercoin',
                    component: SettingsLittercoin,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'picked-up',
                    component: PickedUp,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'emails',
                    component: Emails,
                    meta: {
                        middleware: [ auth ]
                    },
                },
                {
                    path: 'show-flag',
                    component: GlobalFlag,
                    meta: {
                        middleware: [ auth ]
                    },
                },
            ]
        },
        {
            path: '/bbox',
            component: BoundingBox,
            meta: {
                middleware: [ auth, can_bbox ]
            }
        },
        {
            path: '/bbox/verify',
            component: BoundingBox,
            meta: {
                middleware: [ auth, can_verify_boxes ]
            }
        }
    ]
});

/**
 * Pipeline for multiple middleware
 */
router.beforeEach((to, from, next) => {

    if (! to.meta.middleware) return next();

    // testing --- this allows store to init before router finishes and returns with auth false
    // await store.dispatch('CHECK_AUTH');

    const middleware = to.meta.middleware

    const context = { to, from, next, store };

    return middleware[0]({
        ...context,
        next: middlewarePipeline(context, middleware, 1)
    });

});

export default router;
