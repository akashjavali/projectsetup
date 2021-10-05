import { BrowserRouter, Route, Switch } from 'react-router-dom';

import Home from './views/screens/Home'
// import Test from './views/screens/Test'

const App = () => {
  return (
    <>
      <BrowserRouter>
        <Switch>

          <Route path="/" exact>
            <Home />
          </Route>

          {/* <Route path="/test-route" exact>
            <Test />
          </Route> */}

        </Switch>
      </BrowserRouter>
    </>
  );
}

export default App;
