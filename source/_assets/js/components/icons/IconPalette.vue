<template>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="23.298"
    height="25.006"
    viewBox="0 0 23.298 25.006"
  >
    <g id="paint-bucket-40" transform="translate(0.126 2.125)">
      <path
        :class="`text-${color}-700`"
        fill="currentColor"
        id="Path_4"
        data-name="Path 4"
        d="M1,21.921C1,20.285,3.96,16,3.96,16s2.96,4.285,2.96,5.921a2.96,2.96,0,0,1-5.921,0Z"
        transform="translate(-1 -2)"
      />
      <path
        id="Path_1"
        data-name="Path 1"
        d="M3.41,12.017,14.017,19.8c.781.781,3.155-.327,5.3-2.475s3.256-4.522,2.475-5.3L14.017,1.41"
        fill="none"
        stroke="currentColor"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-miterlimit="10"
        stroke-width="2"
      />
      <ellipse
        id="Ellipse_1"
        data-name="Ellipse 1"
        cx="7.5"
        cy="3"
        rx="7.5"
        ry="3"
        transform="translate(1.288 9.895) rotate(-45)"
        fill="none"
        stroke="currentColor"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-miterlimit="10"
        stroke-width="2"
      />
      <path
        :class="`text-${color}-500`"
        fill="currentColor"
        id="Path_2"
        data-name="Path 2"
        d="M1,20c0-1.1,2-4,2-4s2,2.9,2,4a2,2,0,0,1-4,0Z"
      />
      <path
        id="Path_3"
        data-name="Path 3"
        d="M14,11h4a4,4,0,0,0,0-8H15.183"
        fill="none"
        stroke="currentColor"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-miterlimit="10"
        stroke-width="2"
      />
    </g>
  </svg>
</template>

<script>
export default {
  props: {
    color: {
      type: String,
      required: true,
    },
  },
};
</script>