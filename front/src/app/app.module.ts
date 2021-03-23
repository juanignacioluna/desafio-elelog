import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HoraComponent } from './hora/hora.component';
import { FechaComponent } from './fecha/fecha.component';

@NgModule({
  declarations: [
    AppComponent,
    HoraComponent,
    FechaComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
