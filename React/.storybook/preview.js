import React from 'react';
import '../src/index.scss';

import state from '../src/redux/store';
import { Provider } from 'react-redux';

import CssBaseline from '@mui/material/CssBaseline';
import AppTheme from "../src/theme/mui";


export const parameters = {
    actions: { argTypesRegex: '^on[A-Z].*' },
    controls: {
        matchers: {
            color: /(background|color)$/i,
            date: /Date$/,
        },
    },
};

export const decorators = [
    (Story) => (
        <>
            <CssBaseline />
            <Provider store={state}>
                <AppTheme>
                    <Story />
                </AppTheme>
            </Provider>
        </>
    ),
];
