// Modules
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { RouterModule, Routes } from '@angular/router';

// Components
import { AppComponent } from '@components/app/app.component';
import { MiCuentaComponent } from './components/mi-cuenta/mi-cuenta.component';
import { HomeComponent } from './components/home/home.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { ExampleComponent } from './components/example/example.component';

//Routes
const routes: Routes = [
  {
    path: '',
    pathMatch: 'full',
    component: HomeComponent,
  },
  {
    path: 'mi-cuenta',
    component: MiCuentaComponent
  },
  {
    path: 'example',
    component: ExampleComponent
  }
];

@NgModule({
  declarations: [
    AppComponent,
    MiCuentaComponent,
    HomeComponent,
    HeaderComponent,
    FooterComponent,
    ExampleComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
