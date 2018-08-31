<template>
    <div class="pagination">
        <div class="pagination__main">
            <div class="pagination__count">
                <label class="pagination__select">
                    <i></i>
                    <select v-on:change="recount" v-model="countInput">
                        <option v-for="count in counts" :value="count">{{ count }} produtos por página</option>
                    </select>
                </label>
            </div>
            <div class="pagination__pages">
                <div class="pagination__paginator">
                    <div v-on:click="first" :class="{'pagination__paginator__item--inactive':!hasFirst}" class="pagination__paginator__item pagination__paginator__item--first"></div>
                    <div v-on:click="prev" class="pagination__paginator__item pagination__paginator__item--prev" :class="{'pagination__paginator__item--inactive':!hasPrev}"></div>
                    <div v-for="n in numbers" v-on:click="to(n)" :class="{'pagination__paginator__item--active': n == page }" class="pagination__paginator__item">{{n + 1}}</div>
                    <div v-on:click="next" class="pagination__paginator__item pagination__paginator__item--next" :class="{'pagination__paginator__item--inactive':!hasNext}"></div>
                    <div v-on:click="last" class="pagination__paginator__item pagination__paginator__item--last" :class="{'pagination__paginator__item--inactive':!hasLast}"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            page: {
                type: Number,
                default: 0
            },
            count: {
                type: Number,
                default: 10
            },
            total: {
                type: Number,
                default: 0
            },
            update: {
                type: Function,
                default: function() {}
            }
        },
        data: function() {
            return {
                counts: [2, 5, 10, 20, 50],
                countInput: 10,
                hasFirst: false,
                hasPrev: false,
                hasNext: false,
                hasLast: false,
                totalPages: 0,
                totalNumbers: 4,
                numbers: []
            }
        },
        watch: {
            page: function() {
                this.build();
            },
            count: function() {
                this.countInput = this.count;
                this.build();
            },
            total: function() {
                this.build();
            }
        },
        methods: {
            prev: function() {
                if (this.hasPrev) {
                    this.update(this.page - 1, this.countInput);
                }
            },
            next: function() {
                if (this.hasNext) {
                    this.update(this.page + 1, this.countInput);
                }
            },
            first: function() {
                if (this.hasFirst) {
                    this.update(0, this.countInput);
                }
            },
            last: function() {
                if (this.hasLast) {
                    this.update(this.totalPages - 1, this.countInput);
                }
            },
            to: function(page) {
                this.update(page, this.countInput);
            },
            recount: function() {
                this.update(this.page, this.countInput);
            },
            build: function() {
                let page = this.page;
                let count = this.count;
                let total = this.total;
                let totalNumbers = this.totalNumbers;
                let totalPages = 0;
                let offsetNumber = 0;
                let offsetNumber1 = 0;
                let offsetNumber2 = 0;
                let startNumber = 0;

                this.numbers = [];

                totalPages = parseInt(total / count);
                if (total % count > 0) {
                    totalPages++;
                }

                this.totalPages = totalPages;
                this.hasFirst = page > 0 ? true : false;
                this.hasPrev = page > 0 ? true : false;
                this.hasNext = page < totalPages - 1 ? true : false;
                this.hasLast = page < totalPages - 1 ? true : false;

                totalNumbers = totalNumbers < totalPages ? totalNumbers : totalPages;

                offsetNumber1 = parseInt((totalPages - totalNumbers) / 2);
                offsetNumber2 = parseInt(totalNumbers / 2);
                offsetNumber = offsetNumber2 < offsetNumber1 ? offsetNumber2 : offsetNumber1;

                if (offsetNumber < 0) {
                    offsetNumber = 0;
                }

                if (page - offsetNumber <= 0) {
                    startNumber = 0;
                }

                startNumber = page - offsetNumber;

                if (startNumber + totalNumbers >= totalPages) {
                    startNumber = totalPages - totalNumbers;
                }

                if (startNumber < 0) {
                    startNumber = 0;
                }

                for (let i = 0; i < totalNumbers; i++) {
                    this.numbers.push(startNumber + i);
                }
            }
        }
    }
</script>

<style lang="scss">

    @import "../../sass/core/variables";

    .pagination {}

    .pagination__main {}

    .pagination__count {
        display: block;
        text-align: center;
    }

    .pagination__select {
        display: inline-block;
        position: relative;

        > select {
            display: inline-block;
            height: 40px;
            padding-right: 46px;
            padding-left: 15px;
            line-height: 38px;
            background-color: #FFFFFF;
            color: $color-2;
            border: 1px solid $border-color-4;
            appearance: none;
            font-size: 16px;
            outline: none;
            border-radius: 4px;
            cursor: pointer;

            > option {
                display: block;
                height: 38px;
                line-height: inherit;
                font-size: inherit;
            }
        }

        > i {
            content: "";
            display: block;
            pointer-events: none;
            width: 15px;
            height: 15px;
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto 0;
            right: 14px;
            background-image: url(/img/icon-arrow-down.png);
            background-size: cover;
            background-position: center center;
        }
    }

    .pagination__pages {
        display: block;
        padding-top: 32px;
    }

    .pagination__paginator {
        display: flex;
        justify-content: center;
    }

    .pagination__paginator__item {
        width: 50px;
        height: 40px;
        font-size: 16px;
        color: $color-2;
        text-align: center;
        line-height: 38px;
        border: 1px solid transparent;
        border-radius: 4px;
        cursor: pointer;
        background-position: center center;
        background-repeat: no-repeat;

        &:hover {
            background-color: $background-color-2;
        }

        &.pagination__paginator__item--active {
            border-color: $border-color-4;
        }

        &.pagination__paginator__item--first {
            background-image: url(/img/icon-first-active.png);

            &.pagination__paginator__item--inactive {
                background-image: url(/img/icon-first.png);
            }
        }

        &.pagination__paginator__item--prev {
            background-image: url(/img/icon-prev-active.png);

            &.pagination__paginator__item--inactive {
                background-image: url(/img/icon-prev.png);

                &:hover {
                    background-color: transparent;
                }
            }
        }

        &.pagination__paginator__item--next {
            background-image: url(/img/icon-next-active.png);

            &.pagination__paginator__item--inactive {
                background-image: url(/img/icon-next.png);
            }
        }

        &.pagination__paginator__item--last {
            background-image: url(/img/icon-last-active.png);

            &.pagination__paginator__item--inactive {
                background-image: url(/img/icon-last.png);
            }
        }
    }

    @media #{$media-md} {

        .pagination {}

        .pagination__main {
            display: flex;
            justify-content: space-between;
        }

        .pagination__count {
            display: inline-block;
            text-align: left;
        }

        .pagination__pages {
            display: inline-block;
            padding-top: 0px;
        }

        .pagination__paginator {
            display: flex;
            justify-content: flex-end;
        }
    }

</style>