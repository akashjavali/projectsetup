import React from "react";
import { ThemeProvider } from '@mui/material/styles';

import appTheme from "./appTheme";

const Theme = ({ children }) => {
  return (
    <>
      <ThemeProvider theme={appTheme}>{children}</ThemeProvider>
    </>
  );
};


export default Theme;