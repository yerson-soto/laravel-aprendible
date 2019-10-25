const counter = (state = 0, action) => {
    switch(action.type) {
        case 'INCREMENT':
            return state + action.payload
            break;
        case 'DECREMENT':
            return state - action.payload
            break;
        default:
            return state;
    }
}

export default counter;
