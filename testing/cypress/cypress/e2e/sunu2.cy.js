Cypress.Cookies.debug(true)
Cypress.on('uncaught:exception', (err, runnable) => {
    return false;
  });

describe('Edit Data Dokter', () => {
    it('login', () => {
        cy.visit('http://127.0.0.1:8000/')
            cy.get('#exampleInputEmail1').click()
            cy.get('#exampleInputEmail1').type('narendra')
            cy.get('#exampleInputPassword1').click()
            cy.get('#exampleInputPassword1').type('narendra')
            cy.get('#exampleFormControlSelect2').select('Admin')
            cy.get('.btn').click()
    });
    it('edit Dokter gagal : hanya diisi field nama dan jenis kelamin', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('R. Sunu Raihan W')
        cy.get('#membershipRadios2').click()
        cy.get('.form-sample > .btn-primary').click()
    })
    it('edit Dokter gagal : hanya diisi field nama, jenis kelamin dan alamat', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('R. Sunu Raihan W')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Mawar')
        cy.get('.form-sample > .btn-primary').click()
    })
    it('edit Dokter gagal : hanya diisi field nama, jenis kelamin, alamat dan tempat lahir', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('R. Sunu Raihan W')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Mawar')
        cy.get(':nth-child(5) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('Blitar')
        cy.get('.form-sample > .btn-primary').click()
    })
    it('edit Dokter berhasil', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-warning').click()
        cy.get(':nth-child(4) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('R. Sunu Raihan W')
        cy.get('#membershipRadios2').click()
        cy.get(':nth-child(8) > :nth-child(1) > .form-group > .col-sm-9 > .form-control').type('Jl. Mawar')
        cy.get(':nth-child(5) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('Blitar')
        cy.get(':nth-child(8) > :nth-child(2) > .form-group > .col-sm-9 > .form-control').type('089526545324')
        cy.get('.form-sample > .btn-primary').click()
    })
    it('Delete data berhasil', () => {
        cy.get('#ui-basic > .nav > :nth-child(4) > .nav-link').click()
        cy.get(':nth-child(1) > :nth-child(4) > form > .btn-danger').click()
    })
})
