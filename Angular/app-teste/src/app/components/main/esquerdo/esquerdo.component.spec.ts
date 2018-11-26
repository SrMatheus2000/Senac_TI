import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EsquerdoComponent } from './esquerdo.component';

describe('EsquerdoComponent', () => {
  let component: EsquerdoComponent;
  let fixture: ComponentFixture<EsquerdoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EsquerdoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EsquerdoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
