import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Slide extends Component {
    render() {
        return (
           

<div className="row">
<button type="button" className="btn purple-bg btn-lg btn-block">Read more news</button>
</div>
        );
    }
}

export default Slide;

// We only want to try to render our component on pages that have a div with an ID
// of "example"; otherwise, we will see an error in our console 
if (document.getElementById('Slide')) {
    ReactDOM.render(<Slide />, document.getElementById('Slide'));
}