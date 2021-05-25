import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Table, Button } from 'reactstrap';

import CalendarHeatmap from 'react-calendar-heatmap'
import 'react-calendar-heatmap/dist/styles.css'

import axios from 'axios'

import uuid from 'uuid/v4'

class TestPage extends Component {

  constructor(props){
    super(props);

    this.state = {
      order_id: props.order_id,
      title: 'Hello World as',
    }

  }

  componentDidMount() {

  }


  render() {
    return (
      <div className="container">
        <div>
          <h1> Restaurant Menu</h1>
        </div>
          <Table>
            <thead>
              <tr>
                <th>Menu Code</th>
                <th>Menu Image</th>
                <th>Menu Title</th>
                <th>Menu Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>BREAKFAST</td>
                <td>NASI LEMAK</td>
                <td></td>
                <td>
                  <Button color="success" size="sm" className="mr-2 m-1">Update</Button>
                  <Button color="success" size="sm" className="mr-2 m-1">Add</Button>
                  <Button color="danger" size="sm"className="mr-2 m-1" >Delete</Button>
                </td>
              </tr>
            </tbody>
          </Table>
      </div>
    );
  }
}

export default TestPage;

if (document.getElementById("root")) {

  const element = document.getElementById('root');
  const props = Object.assign({},element.dataset);

  ReactDOM.render(<TestPage {...props} />, document.getElementById("root"));
}
