import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class News_Index extends Component {
    renderNews(){
        if(lang=='nl'){
            return news.map(news=>{
                return (

                    <article class="module">
                        <div class="inside-module">
                            <div class="bar-full">
                                <span class="bar"></span>
                                    <div class="bar-box">
                                         <span class="bar-flip">{news.titleNl}</span>
                                    </div> 
                                </div>

                                    
  
                                <div class="pad">
                                    <p>{news.bodyNl}</p>
                                </div>
                             </div>
                    </article>
                  
                    
                );
            })
        }
        
    }
    
    render() {
        return (
      <div>

           
                        {this.renderNews() }
           
        </div>
        );
    }
}

export default News_Index;

// We only want to try to render our component on pages that have a div with an ID
// of "example"; otherwise, we will see an error in our console 
if (document.getElementById('news_index')) {
    ReactDOM.render(<News_Index />, document.getElementById('news_index'));
}

