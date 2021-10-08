import React from 'react';
import ReactDOM from 'react-dom';
import './index.scss';
import App from './App';

import state from './redux/store';
import { Provider } from 'react-redux';

import CssBaseline from '@mui/material/CssBaseline';
import AppTheme from "./theme/mui";

ReactDOM.render(
    <>
        <CssBaseline />
        <Provider store={state}>
            <AppTheme>
                <App />
            </AppTheme>
        </Provider>
    </>,
    document.getElementById('root')
);
