import logo from './logo.svg';
import './App.css';

import { lazy, Suspense } from 'react';

const Slogan = lazy(()=>import('./code-splitting/Slogan'))
const Rodape = lazy(()=>import('./code-splitting/Rodape'))

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <Suspense fallback={<p>Carregando... Aguarde..</p>}>
          <Slogan />
        </Suspense>
        
        <Suspense fallback={<p>Carregando... Aguarde..</p>}>
          <Rodape />
        </Suspense>
      </header>
    </div>
  );
}

export default App;
