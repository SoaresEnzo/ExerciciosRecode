import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Home from './Home';
import Sobre from './Sobre';

function App() {
  return (
    <BrowserRouter>
      <Switch>
        <Route path="/" component={Home} exact/>
        <Route path="/sobre" component={Sobre}/>
      </Switch>
    </BrowserRouter>
  );
}

export default App;
