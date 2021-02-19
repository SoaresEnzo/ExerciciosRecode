import './App.css';

import { lazy, Suspense } from 'react';

import Cabecalho from './code-splitting/CabecalhoBetter';
const Slogan = lazy(() => import('./code-splitting/Slogan'))
const Rodape = lazy(() => import('./code-splitting/Rodape'))


function App() {
    return (
        <div className="App">
            <header className="App-header">
                <Suspense fallback={
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Carregando Imagem...</span>
                    </div>
                }>
                    <Cabecalho />
                </Suspense>


                <Suspense fallback={<div class="spinner-border text-danger" role="status">
                    <span class="sr-only">Carrgando Slogan...</span>
                </div>
                }>
                    <Slogan />
                </Suspense>

                <Suspense fallback={<div class="spinner-border text-white" role="status">
                    <span class="sr-only">Carregando Rodapé...</span>
                </div>
                }>
                    <Rodape />
                </Suspense>
            </header>
        </div>
    );
}

export default App;
