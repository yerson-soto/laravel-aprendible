import React from 'react';
import ReactDOM from 'react-dom';
import Counter from './Counter';

import { Provider } from 'react-redux';
import store from '../store';


function App() {
    return (
        <Provider store={store}>
            <Counter />
        </Provider>
    );
}

export default App;

// if (document.getElementById('app')) {
//     ReactDOM.render(<App />, document.getElementById('app'));
// }
