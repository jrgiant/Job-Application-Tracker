import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';

it('renders without crashing', () => {
  const div = document.createElement('div');
  ReactDOM.render(<App />, div);
});

describe('Login', function() {
  it('Allows a person to register as a user');
  it('Allows new user to Login and Logout');
  it('Locks acounts with repetative inccorect login attempts');
  it('Allows a User to remove their account');

});
describe('Company', function() {
  it('Allows User to Add a new company');
  it('Allows user to add a company in the process of adding an application');
  it('Prevents the User from deleting companies that have applications assigned to them');
  it('Allows users to merge duplicate companies');
});
describe('Applications', function() {
  it('Allows user to add application to an existing company');
  it('Allows mulitple applications per user per company given the name of the position or the location is different');
  it('Allow the user to specify HR instructions included in the Job Description Including No Contact');
  it('Reminds the User when a company has been appliaed to and no response is given');
});
