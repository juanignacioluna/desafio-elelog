import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {

	title = 'reloj';

	fechaActual: Date;

	ngOnInit(): void {

		setInterval(()=>{this.fechaActual = new Date()}, 1000);

	}

}
