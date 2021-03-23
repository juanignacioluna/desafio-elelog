import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-fecha',
  templateUrl: './fecha.component.html',
  styleUrls: ['./fecha.component.css']
})
export class FechaComponent implements OnInit {

	@Input() hoy: Date;

	constructor() { }

	ngOnInit(): void {

	}

}
