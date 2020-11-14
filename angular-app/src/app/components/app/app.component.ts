import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {
  title = 'angular-app';
  users = [];

  constructor(
    private _http: HttpClient
  ) { }

  ngOnInit() {
    this._http.get('http://mercafake.test/api/users').subscribe((data: any[]) => {
      console.log(data)
      this.users = data
    });
  }
}
