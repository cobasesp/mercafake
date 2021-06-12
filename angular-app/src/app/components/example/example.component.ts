import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../../environments/environment';

@Component({
  selector: 'app-example',
  templateUrl: './example.component.html',
  styleUrls: ['./example.component.scss']
})
export class ExampleComponent implements OnInit {

  title = 'angular-app';
  users: Array<any> = [];
  newUserName: string = ''
  newUserAge: number = 0;

  constructor(
    private _http: HttpClient
  ) { }

  ngOnInit() {
    this._http.get(environment.api_url + 'users').subscribe((data: any[]) => {
      console.log(data)
      this.users = data
    });
  }

  addUser() {
    let user: any = new Object();
    user.name = this.newUserName;
    user.edad = this.newUserAge;

    this.newUserName = '';
    this.newUserAge = 0;

    this.users.push(user)
  }

}
